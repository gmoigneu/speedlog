<?php

namespace SpeedLog\CoreBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use SpeedLog\CoreBundle\Model\Report;

class ReportCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('report:generate')
            ->setDescription('Generate a new speed report for a website')
            ->addArgument(
                'website',
                InputArgument::REQUIRED,
                'Website Identifier'
            )
        ;
        
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $dm = $this->getContainer()->get('doctrine_mongodb')->getManager();

        $website = $dm->getRepository('SpeedLog\CoreBundle\Document\Website')->findOneById($input->getArgument('website'));
        if ($website) {
            $output->writeln('<info>Starting report for ' . $website->getName() . '</info>');
        } else {
            $output->writeln('<error>No website with this Id.</error>');
            exit();
        }

        $pages = $website->getPages();
        if(count($pages) == 0) {
            $output->writeln('<error>Website has no page.</error>');
            exit();
        }
        foreach ($pages as $page) {
            $output->writeln('Creating report for page ' . $page->getName() . '(' . $page->getUrl() . ')');
            $report = new Report($page, $dm);
            $report->generate();
        }

        $output->writeln('<info>Website ' . $website->getName() . ' completed.</info>');

    }
}