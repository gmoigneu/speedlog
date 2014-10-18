<?php

namespace SpeedLog\CoreBundle\Document;

use SpeedLog\CoreBundle\Document\Page;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @MongoDB\Document(repositoryClass="SpeedLog\CoreBundle\Repository\ReportRepository")
 */
class Report
{
    /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $id;

    /**
     * @MongoDB\Int
     */
    protected $duration;

    /**
     * @MongoDB\ReferenceOne(targetDocument="Page")
     */
    protected $page;

    /**
     * @var date $created
     *
     * @MongoDB\Date
     * @Gedmo\Timestampable(on="create")
     */
    protected $created;

    /**
    * @MongoDB\Int
    */
    protected $requests;

    /**
    * @MongoDB\Int
    */
    protected $gzipRequests;

    /**
    * @MongoDB\Int
    */
    protected $postRequests;

    /**
    * @MongoDB\Int
    */
    protected $httpsRequests;

    /**
    * @MongoDB\Int
    */
    protected $notFound;

    /**
    * @MongoDB\Int
    */
    protected $bodySize;

    /**
    * @MongoDB\Int
    */
    protected $contentLength;

    /**
    * @MongoDB\Int
    */
    protected $httpTrafficCompleted;

    /**
    * @MongoDB\Int
    */
    protected $timeToFirstByte;

    /**
    * @MongoDB\Int
    */
    protected $timeToLastByte;

    /**
    * @MongoDB\Int
    */
    protected $ajaxRequests;

    /**
    * @MongoDB\Int
    */
    protected $htmlCount;

    /**
    * @MongoDB\Int
    */
    protected $htmlSize;

    /**
    * @MongoDB\Int
    */
    protected $cssCount;

    /**
    * @MongoDB\Int
    */
    protected $cssSize;

    /**
    * @MongoDB\Int
    */
    protected $jsCount;

    /**
    * @MongoDB\Int
    */
    protected $jsSize;

    /**
    * @MongoDB\Int
    */
    protected $jsonCount;

    /**
    * @MongoDB\Int
    */
    protected $jsonSize;

    /**
    * @MongoDB\Int
    */
    protected $imageCount;

    /**
    * @MongoDB\Int
    */
    protected $imageSize;

    /**
    * @MongoDB\Int
    */
    protected $videoCount;

    /**
    * @MongoDB\Int
    */
    protected $videoSize;

    /**
    * @MongoDB\Int
    */
    protected $webfontCount;

    /**
    * @MongoDB\Int
    */
    protected $webfontSize;

    /**
    * @MongoDB\Int
    */
    protected $base64Count;

    /**
    * @MongoDB\Int
    */
    protected $base64Size;

    /**
    * @MongoDB\Int
    */
    protected $otherCount;

    /**
    * @MongoDB\Int
    */
    protected $otherSize;

    /**
    * @MongoDB\Int
    */
    protected $cacheHits;

    /**
    * @MongoDB\Int
    */
    protected $cacheMisses;

    /**
    * @MongoDB\Int
    */
    protected $cachePasses;

    /**
    * @MongoDB\Int
    */
    protected $cachingNotSpecified;

    /**
    * @MongoDB\Int
    */
    protected $cachingTooShort;

    /**
    * @MongoDB\Int
    */
    protected $cachingDisabled;

    /**
    * @MongoDB\Int
    */
    protected $oldCachingHeaders;

    /**
    * @MongoDB\Int
    */
    protected $consoleMessages;

    /**
    * @MongoDB\Int
    */
    protected $cookiesSent;

    /**
    * @MongoDB\Int
    */
    protected $cookiesRecv;

    /**
    * @MongoDB\Int
    */
    protected $domainsWithCookies;

    /**
    * @MongoDB\Int
    */
    protected $documentCookiesLength;

    /**
    * @MongoDB\Int
    */
    protected $documentCookiesCount;

    /**
    * @MongoDB\Int
    */
    protected $documentHeight;

    /**
    * @MongoDB\Int
    */
    protected $domains;

    /**
    * @MongoDB\Int
    */
    protected $maxRequestsPerDomain;

    /**
    * @MongoDB\Int
    */
    protected $medianRequestsPerDomain;

    /**
    * @MongoDB\Int
    */
    protected $commentsSize;

    /**
    * @MongoDB\Int
    */
    protected $whiteSpacesSize;

    /**
    * @MongoDB\Int
    */
    protected $DOMelementsCount;

    /**
    * @MongoDB\Int
    */
    protected $DOMelementMaxDepth;

    /**
    * @MongoDB\Int
    */
    protected $nodesWithInlineCSS;

    /**
    * @MongoDB\Int
    */
    protected $imagesScaledDown;

    /**
    * @MongoDB\Int
    */
    protected $imagesWithoutDimensions;

    /**
    * @MongoDB\Int
    */
    protected $hiddenContentSize;

    /**
    * @MongoDB\Int
    */
    protected $DOMmutationsInserts;

    /**
    * @MongoDB\Int
    */
    protected $DOMmutationsRemoves;

    /**
    * @MongoDB\Int
    */
    protected $DOMmutationsAttributes;

    /**
    * @MongoDB\Int
    */
    protected $DOMqueries;

    /**
    * @MongoDB\Int
    */
    protected $DOMqueriesById;

    /**
    * @MongoDB\Int
    */
    protected $DOMqueriesByClassName;

    /**
    * @MongoDB\Int
    */
    protected $DOMqueriesByTagName;

    /**
    * @MongoDB\Int
    */
    protected $DOMqueriesByQuerySelectorAll;

    /**
    * @MongoDB\Int
    */
    protected $DOMinserts;

    /**
    * @MongoDB\Int
    */
    protected $DOMqueriesDuplicated;

    /**
    * @MongoDB\Int
    */
    protected $eventsBound;

    /**
    * @MongoDB\Int
    */
    protected $globalVariables;

    /**
    * @MongoDB\Int
    */
    protected $globalVariablesFalsy;

    /**
    * @MongoDB\Int
    */
    protected $headersCount;

    /**
    * @MongoDB\Int
    */
    protected $headersSentCount;

    /**
    * @MongoDB\Int
    */
    protected $headersRecvCount;

    /**
    * @MongoDB\Int
    */
    protected $headersSize;

    /**
    * @MongoDB\Int
    */
    protected $headersSentSize;

    /**
    * @MongoDB\Int
    */
    protected $headersRecvSize;

    /**
    * @MongoDB\Int
    */
    protected $headersBiggerThanContent;

    /**
    * @MongoDB\Int
    */
    protected $documentWriteCalls;

    /**
    * @MongoDB\Int
    */
    protected $evalCalls;

    /**
    * @MongoDB\Int
    */
    protected $jQueryVersion;

    /**
    * @MongoDB\Int
    */
    protected $jQueryOnDOMReadyFunctions;

    /**
    * @MongoDB\Int
    */
    protected $jQuerySizzleCalls;

    /**
    * @MongoDB\Int
    */
    protected $jsErrors;

    /**
    * @MongoDB\Int
    */
    protected $localStorageEntries;

    /**
    * @MongoDB\Int
    */
    protected $redirects;

    /**
    * @MongoDB\Int
    */
    protected $redirectsTime;

    /**
    * @MongoDB\Int
    */
    protected $assetsNotGzipped;

    /**
    * @MongoDB\Int
    */
    protected $assetsWithQueryString;

    /**
    * @MongoDB\Int
    */
    protected $assetsWithCookies;

    /**
    * @MongoDB\Int
    */
    protected $smallImages;

    /**
    * @MongoDB\Int
    */
    protected $multipleRequests;

    /**
    * @MongoDB\Int
    */
    protected $timeToFirstCss;

    /**
    * @MongoDB\Int
    */
    protected $timeToFirstJs;

    /**
    * @MongoDB\Int
    */
    protected $timeToFirstImage;

    /**
    * @MongoDB\Int
    */
    protected $domInteractive;

    /**
    * @MongoDB\Int
    */
    protected $domContentLoaded;

    /**
    * @MongoDB\Int
    */
    protected $domContentLoadedEnd;

    /**
    * @MongoDB\Int
    */
    protected $domComplete;

    /**
    * @MongoDB\Int
    */
    protected $timeBackend;

    /**
    * @MongoDB\Int
    */
    protected $timeFrontend;

    /**
    * @MongoDB\Collection
    */
    protected $statusCodesTrail;

    /**
    * @MongoDB\Int
    */
    protected $windowAlerts;

    /**
    * @MongoDB\Int
    */
    protected $windowConfirms;

    /**
    * @MongoDB\Int
    */
    protected $windowPrompts;

    /**
    * @MongoDB\Int
    */
    protected $bodyHTMLSize;

    /**
    * @MongoDB\Int
    */
    protected $iframesCount;

    /**
    * @MongoDB\Int
    */
    protected $smallestResponse;

    /**
    * @MongoDB\Int
    */
    protected $biggestResponse;

    /**
    * @MongoDB\Int
    */
    protected $fastestResponse;

    /**
    * @MongoDB\Int
    */
    protected $slowestResponse;

    /**
    * @MongoDB\Int
    */
    protected $smallestLatency;

    /**
    * @MongoDB\Int
    */
    protected $biggestLatency;

    /**
    * @MongoDB\Int
    */
    protected $medianResponse;

    /**
    * @MongoDB\Int
    */
    protected $medianLatency;
    
    public function __get($name)
    {
        if(property_exists($this, $name)){
            return $this->$name;
        }
    }

    public function __set($name, $value)
    {
        if(property_exists($this, $name)){
            $this->$name = $value;
            return $this;
        }
    }

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set duration
     *
     * @param int $duration
     * @return self
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Get duration
     *
     * @return int $duration
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set page
     *
     * @param SpeedLog\CoreBundle\Document\Page $page
     * @return self
     */
    public function setPage(\SpeedLog\CoreBundle\Document\Page $page)
    {
        $this->page = $page;
        return $this;
    }

    /**
     * Get page
     *
     * @return SpeedLog\CoreBundle\Document\Page $page
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Set created
     *
     * @param date $created
     * @return self
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Get created
     *
     * @return date $created
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set requests
     *
     * @param int $requests
     * @return self
     */
    public function setRequests($requests)
    {
        $this->requests = $requests;
        return $this;
    }

    /**
     * Get requests
     *
     * @return int $requests
     */
    public function getRequests()
    {
        return $this->requests;
    }

    /**
     * Set gzipRequests
     *
     * @param int $gzipRequests
     * @return self
     */
    public function setGzipRequests($gzipRequests)
    {
        $this->gzipRequests = $gzipRequests;
        return $this;
    }

    /**
     * Get gzipRequests
     *
     * @return int $gzipRequests
     */
    public function getGzipRequests()
    {
        return $this->gzipRequests;
    }

    /**
     * Set postRequests
     *
     * @param int $postRequests
     * @return self
     */
    public function setPostRequests($postRequests)
    {
        $this->postRequests = $postRequests;
        return $this;
    }

    /**
     * Get postRequests
     *
     * @return int $postRequests
     */
    public function getPostRequests()
    {
        return $this->postRequests;
    }

    /**
     * Set httpsRequests
     *
     * @param int $httpsRequests
     * @return self
     */
    public function setHttpsRequests($httpsRequests)
    {
        $this->httpsRequests = $httpsRequests;
        return $this;
    }

    /**
     * Get httpsRequests
     *
     * @return int $httpsRequests
     */
    public function getHttpsRequests()
    {
        return $this->httpsRequests;
    }

    /**
     * Set notFound
     *
     * @param int $notFound
     * @return self
     */
    public function setNotFound($notFound)
    {
        $this->notFound = $notFound;
        return $this;
    }

    /**
     * Get notFound
     *
     * @return int $notFound
     */
    public function getNotFound()
    {
        return $this->notFound;
    }

    /**
     * Set bodySize
     *
     * @param int $bodySize
     * @return self
     */
    public function setBodySize($bodySize)
    {
        $this->bodySize = $bodySize;
        return $this;
    }

    /**
     * Get bodySize
     *
     * @return int $bodySize
     */
    public function getBodySize()
    {
        return $this->bodySize;
    }

    /**
     * Set contentLength
     *
     * @param int $contentLength
     * @return self
     */
    public function setContentLength($contentLength)
    {
        $this->contentLength = $contentLength;
        return $this;
    }

    /**
     * Get contentLength
     *
     * @return int $contentLength
     */
    public function getContentLength()
    {
        return $this->contentLength;
    }

    /**
     * Set httpTrafficCompleted
     *
     * @param int $httpTrafficCompleted
     * @return self
     */
    public function setHttpTrafficCompleted($httpTrafficCompleted)
    {
        $this->httpTrafficCompleted = $httpTrafficCompleted;
        return $this;
    }

    /**
     * Get httpTrafficCompleted
     *
     * @return int $httpTrafficCompleted
     */
    public function getHttpTrafficCompleted()
    {
        return $this->httpTrafficCompleted;
    }

    /**
     * Set timeToFirstByte
     *
     * @param int $timeToFirstByte
     * @return self
     */
    public function setTimeToFirstByte($timeToFirstByte)
    {
        $this->timeToFirstByte = $timeToFirstByte;
        return $this;
    }

    /**
     * Get timeToFirstByte
     *
     * @return int $timeToFirstByte
     */
    public function getTimeToFirstByte()
    {
        return $this->timeToFirstByte;
    }

    /**
     * Set timeToLastByte
     *
     * @param int $timeToLastByte
     * @return self
     */
    public function setTimeToLastByte($timeToLastByte)
    {
        $this->timeToLastByte = $timeToLastByte;
        return $this;
    }

    /**
     * Get timeToLastByte
     *
     * @return int $timeToLastByte
     */
    public function getTimeToLastByte()
    {
        return $this->timeToLastByte;
    }

    /**
     * Set ajaxRequests
     *
     * @param int $ajaxRequests
     * @return self
     */
    public function setAjaxRequests($ajaxRequests)
    {
        $this->ajaxRequests = $ajaxRequests;
        return $this;
    }

    /**
     * Get ajaxRequests
     *
     * @return int $ajaxRequests
     */
    public function getAjaxRequests()
    {
        return $this->ajaxRequests;
    }

    /**
     * Set htmlCount
     *
     * @param int $htmlCount
     * @return self
     */
    public function setHtmlCount($htmlCount)
    {
        $this->htmlCount = $htmlCount;
        return $this;
    }

    /**
     * Get htmlCount
     *
     * @return int $htmlCount
     */
    public function getHtmlCount()
    {
        return $this->htmlCount;
    }

    /**
     * Set htmlSize
     *
     * @param int $htmlSize
     * @return self
     */
    public function setHtmlSize($htmlSize)
    {
        $this->htmlSize = $htmlSize;
        return $this;
    }

    /**
     * Get htmlSize
     *
     * @return int $htmlSize
     */
    public function getHtmlSize()
    {
        return $this->htmlSize;
    }

    /**
     * Set cssCount
     *
     * @param int $cssCount
     * @return self
     */
    public function setCssCount($cssCount)
    {
        $this->cssCount = $cssCount;
        return $this;
    }

    /**
     * Get cssCount
     *
     * @return int $cssCount
     */
    public function getCssCount()
    {
        return $this->cssCount;
    }

    /**
     * Set cssSize
     *
     * @param int $cssSize
     * @return self
     */
    public function setCssSize($cssSize)
    {
        $this->cssSize = $cssSize;
        return $this;
    }

    /**
     * Get cssSize
     *
     * @return int $cssSize
     */
    public function getCssSize()
    {
        return $this->cssSize;
    }

    /**
     * Set jsCount
     *
     * @param int $jsCount
     * @return self
     */
    public function setJsCount($jsCount)
    {
        $this->jsCount = $jsCount;
        return $this;
    }

    /**
     * Get jsCount
     *
     * @return int $jsCount
     */
    public function getJsCount()
    {
        return $this->jsCount;
    }

    /**
     * Set jsSize
     *
     * @param int $jsSize
     * @return self
     */
    public function setJsSize($jsSize)
    {
        $this->jsSize = $jsSize;
        return $this;
    }

    /**
     * Get jsSize
     *
     * @return int $jsSize
     */
    public function getJsSize()
    {
        return $this->jsSize;
    }

    /**
     * Set jsonCount
     *
     * @param int $jsonCount
     * @return self
     */
    public function setJsonCount($jsonCount)
    {
        $this->jsonCount = $jsonCount;
        return $this;
    }

    /**
     * Get jsonCount
     *
     * @return int $jsonCount
     */
    public function getJsonCount()
    {
        return $this->jsonCount;
    }

    /**
     * Set jsonSize
     *
     * @param int $jsonSize
     * @return self
     */
    public function setJsonSize($jsonSize)
    {
        $this->jsonSize = $jsonSize;
        return $this;
    }

    /**
     * Get jsonSize
     *
     * @return int $jsonSize
     */
    public function getJsonSize()
    {
        return $this->jsonSize;
    }

    /**
     * Set imageCount
     *
     * @param int $imageCount
     * @return self
     */
    public function setImageCount($imageCount)
    {
        $this->imageCount = $imageCount;
        return $this;
    }

    /**
     * Get imageCount
     *
     * @return int $imageCount
     */
    public function getImageCount()
    {
        return $this->imageCount;
    }

    /**
     * Set imageSize
     *
     * @param int $imageSize
     * @return self
     */
    public function setImageSize($imageSize)
    {
        $this->imageSize = $imageSize;
        return $this;
    }

    /**
     * Get imageSize
     *
     * @return int $imageSize
     */
    public function getImageSize()
    {
        return $this->imageSize;
    }

    /**
     * Set videoCount
     *
     * @param int $videoCount
     * @return self
     */
    public function setVideoCount($videoCount)
    {
        $this->videoCount = $videoCount;
        return $this;
    }

    /**
     * Get videoCount
     *
     * @return int $videoCount
     */
    public function getVideoCount()
    {
        return $this->videoCount;
    }

    /**
     * Set videoSize
     *
     * @param int $videoSize
     * @return self
     */
    public function setVideoSize($videoSize)
    {
        $this->videoSize = $videoSize;
        return $this;
    }

    /**
     * Get videoSize
     *
     * @return int $videoSize
     */
    public function getVideoSize()
    {
        return $this->videoSize;
    }

    /**
     * Set webfontCount
     *
     * @param int $webfontCount
     * @return self
     */
    public function setWebfontCount($webfontCount)
    {
        $this->webfontCount = $webfontCount;
        return $this;
    }

    /**
     * Get webfontCount
     *
     * @return int $webfontCount
     */
    public function getWebfontCount()
    {
        return $this->webfontCount;
    }

    /**
     * Set webfontSize
     *
     * @param int $webfontSize
     * @return self
     */
    public function setWebfontSize($webfontSize)
    {
        $this->webfontSize = $webfontSize;
        return $this;
    }

    /**
     * Get webfontSize
     *
     * @return int $webfontSize
     */
    public function getWebfontSize()
    {
        return $this->webfontSize;
    }

    /**
     * Set base64Count
     *
     * @param int $base64Count
     * @return self
     */
    public function setBase64Count($base64Count)
    {
        $this->base64Count = $base64Count;
        return $this;
    }

    /**
     * Get base64Count
     *
     * @return int $base64Count
     */
    public function getBase64Count()
    {
        return $this->base64Count;
    }

    /**
     * Set base64Size
     *
     * @param int $base64Size
     * @return self
     */
    public function setBase64Size($base64Size)
    {
        $this->base64Size = $base64Size;
        return $this;
    }

    /**
     * Get base64Size
     *
     * @return int $base64Size
     */
    public function getBase64Size()
    {
        return $this->base64Size;
    }

    /**
     * Set otherCount
     *
     * @param int $otherCount
     * @return self
     */
    public function setOtherCount($otherCount)
    {
        $this->otherCount = $otherCount;
        return $this;
    }

    /**
     * Get otherCount
     *
     * @return int $otherCount
     */
    public function getOtherCount()
    {
        return $this->otherCount;
    }

    /**
     * Set otherSize
     *
     * @param int $otherSize
     * @return self
     */
    public function setOtherSize($otherSize)
    {
        $this->otherSize = $otherSize;
        return $this;
    }

    /**
     * Get otherSize
     *
     * @return int $otherSize
     */
    public function getOtherSize()
    {
        return $this->otherSize;
    }

    /**
     * Set cacheHits
     *
     * @param int $cacheHits
     * @return self
     */
    public function setCacheHits($cacheHits)
    {
        $this->cacheHits = $cacheHits;
        return $this;
    }

    /**
     * Get cacheHits
     *
     * @return int $cacheHits
     */
    public function getCacheHits()
    {
        return $this->cacheHits;
    }

    /**
     * Set cacheMisses
     *
     * @param int $cacheMisses
     * @return self
     */
    public function setCacheMisses($cacheMisses)
    {
        $this->cacheMisses = $cacheMisses;
        return $this;
    }

    /**
     * Get cacheMisses
     *
     * @return int $cacheMisses
     */
    public function getCacheMisses()
    {
        return $this->cacheMisses;
    }

    /**
     * Set cachePasses
     *
     * @param int $cachePasses
     * @return self
     */
    public function setCachePasses($cachePasses)
    {
        $this->cachePasses = $cachePasses;
        return $this;
    }

    /**
     * Get cachePasses
     *
     * @return int $cachePasses
     */
    public function getCachePasses()
    {
        return $this->cachePasses;
    }

    /**
     * Set cachingNotSpecified
     *
     * @param int $cachingNotSpecified
     * @return self
     */
    public function setCachingNotSpecified($cachingNotSpecified)
    {
        $this->cachingNotSpecified = $cachingNotSpecified;
        return $this;
    }

    /**
     * Get cachingNotSpecified
     *
     * @return int $cachingNotSpecified
     */
    public function getCachingNotSpecified()
    {
        return $this->cachingNotSpecified;
    }

    /**
     * Set cachingTooShort
     *
     * @param int $cachingTooShort
     * @return self
     */
    public function setCachingTooShort($cachingTooShort)
    {
        $this->cachingTooShort = $cachingTooShort;
        return $this;
    }

    /**
     * Get cachingTooShort
     *
     * @return int $cachingTooShort
     */
    public function getCachingTooShort()
    {
        return $this->cachingTooShort;
    }

    /**
     * Set cachingDisabled
     *
     * @param int $cachingDisabled
     * @return self
     */
    public function setCachingDisabled($cachingDisabled)
    {
        $this->cachingDisabled = $cachingDisabled;
        return $this;
    }

    /**
     * Get cachingDisabled
     *
     * @return int $cachingDisabled
     */
    public function getCachingDisabled()
    {
        return $this->cachingDisabled;
    }

    /**
     * Set oldCachingHeaders
     *
     * @param int $oldCachingHeaders
     * @return self
     */
    public function setOldCachingHeaders($oldCachingHeaders)
    {
        $this->oldCachingHeaders = $oldCachingHeaders;
        return $this;
    }

    /**
     * Get oldCachingHeaders
     *
     * @return int $oldCachingHeaders
     */
    public function getOldCachingHeaders()
    {
        return $this->oldCachingHeaders;
    }

    /**
     * Set consoleMessages
     *
     * @param int $consoleMessages
     * @return self
     */
    public function setConsoleMessages($consoleMessages)
    {
        $this->consoleMessages = $consoleMessages;
        return $this;
    }

    /**
     * Get consoleMessages
     *
     * @return int $consoleMessages
     */
    public function getConsoleMessages()
    {
        return $this->consoleMessages;
    }

    /**
     * Set cookiesSent
     *
     * @param int $cookiesSent
     * @return self
     */
    public function setCookiesSent($cookiesSent)
    {
        $this->cookiesSent = $cookiesSent;
        return $this;
    }

    /**
     * Get cookiesSent
     *
     * @return int $cookiesSent
     */
    public function getCookiesSent()
    {
        return $this->cookiesSent;
    }

    /**
     * Set cookiesRecv
     *
     * @param int $cookiesRecv
     * @return self
     */
    public function setCookiesRecv($cookiesRecv)
    {
        $this->cookiesRecv = $cookiesRecv;
        return $this;
    }

    /**
     * Get cookiesRecv
     *
     * @return int $cookiesRecv
     */
    public function getCookiesRecv()
    {
        return $this->cookiesRecv;
    }

    /**
     * Set domainsWithCookies
     *
     * @param int $domainsWithCookies
     * @return self
     */
    public function setDomainsWithCookies($domainsWithCookies)
    {
        $this->domainsWithCookies = $domainsWithCookies;
        return $this;
    }

    /**
     * Get domainsWithCookies
     *
     * @return int $domainsWithCookies
     */
    public function getDomainsWithCookies()
    {
        return $this->domainsWithCookies;
    }

    /**
     * Set documentCookiesLength
     *
     * @param int $documentCookiesLength
     * @return self
     */
    public function setDocumentCookiesLength($documentCookiesLength)
    {
        $this->documentCookiesLength = $documentCookiesLength;
        return $this;
    }

    /**
     * Get documentCookiesLength
     *
     * @return int $documentCookiesLength
     */
    public function getDocumentCookiesLength()
    {
        return $this->documentCookiesLength;
    }

    /**
     * Set documentCookiesCount
     *
     * @param int $documentCookiesCount
     * @return self
     */
    public function setDocumentCookiesCount($documentCookiesCount)
    {
        $this->documentCookiesCount = $documentCookiesCount;
        return $this;
    }

    /**
     * Get documentCookiesCount
     *
     * @return int $documentCookiesCount
     */
    public function getDocumentCookiesCount()
    {
        return $this->documentCookiesCount;
    }

    /**
     * Set documentHeight
     *
     * @param int $documentHeight
     * @return self
     */
    public function setDocumentHeight($documentHeight)
    {
        $this->documentHeight = $documentHeight;
        return $this;
    }

    /**
     * Get documentHeight
     *
     * @return int $documentHeight
     */
    public function getDocumentHeight()
    {
        return $this->documentHeight;
    }

    /**
     * Set domains
     *
     * @param int $domains
     * @return self
     */
    public function setDomains($domains)
    {
        $this->domains = $domains;
        return $this;
    }

    /**
     * Get domains
     *
     * @return int $domains
     */
    public function getDomains()
    {
        return $this->domains;
    }

    /**
     * Set maxRequestsPerDomain
     *
     * @param int $maxRequestsPerDomain
     * @return self
     */
    public function setMaxRequestsPerDomain($maxRequestsPerDomain)
    {
        $this->maxRequestsPerDomain = $maxRequestsPerDomain;
        return $this;
    }

    /**
     * Get maxRequestsPerDomain
     *
     * @return int $maxRequestsPerDomain
     */
    public function getMaxRequestsPerDomain()
    {
        return $this->maxRequestsPerDomain;
    }

    /**
     * Set medianRequestsPerDomain
     *
     * @param int $medianRequestsPerDomain
     * @return self
     */
    public function setMedianRequestsPerDomain($medianRequestsPerDomain)
    {
        $this->medianRequestsPerDomain = $medianRequestsPerDomain;
        return $this;
    }

    /**
     * Get medianRequestsPerDomain
     *
     * @return int $medianRequestsPerDomain
     */
    public function getMedianRequestsPerDomain()
    {
        return $this->medianRequestsPerDomain;
    }

    /**
     * Set commentsSize
     *
     * @param int $commentsSize
     * @return self
     */
    public function setCommentsSize($commentsSize)
    {
        $this->commentsSize = $commentsSize;
        return $this;
    }

    /**
     * Get commentsSize
     *
     * @return int $commentsSize
     */
    public function getCommentsSize()
    {
        return $this->commentsSize;
    }

    /**
     * Set whiteSpacesSize
     *
     * @param int $whiteSpacesSize
     * @return self
     */
    public function setWhiteSpacesSize($whiteSpacesSize)
    {
        $this->whiteSpacesSize = $whiteSpacesSize;
        return $this;
    }

    /**
     * Get whiteSpacesSize
     *
     * @return int $whiteSpacesSize
     */
    public function getWhiteSpacesSize()
    {
        return $this->whiteSpacesSize;
    }

    /**
     * Set dOMelementsCount
     *
     * @param int $dOMelementsCount
     * @return self
     */
    public function setDOMelementsCount($dOMelementsCount)
    {
        $this->DOMelementsCount = $dOMelementsCount;
        return $this;
    }

    /**
     * Get dOMelementsCount
     *
     * @return int $dOMelementsCount
     */
    public function getDOMelementsCount()
    {
        return $this->DOMelementsCount;
    }

    /**
     * Set dOMelementMaxDepth
     *
     * @param int $dOMelementMaxDepth
     * @return self
     */
    public function setDOMelementMaxDepth($dOMelementMaxDepth)
    {
        $this->DOMelementMaxDepth = $dOMelementMaxDepth;
        return $this;
    }

    /**
     * Get dOMelementMaxDepth
     *
     * @return int $dOMelementMaxDepth
     */
    public function getDOMelementMaxDepth()
    {
        return $this->DOMelementMaxDepth;
    }

    /**
     * Set nodesWithInlineCSS
     *
     * @param int $nodesWithInlineCSS
     * @return self
     */
    public function setNodesWithInlineCSS($nodesWithInlineCSS)
    {
        $this->nodesWithInlineCSS = $nodesWithInlineCSS;
        return $this;
    }

    /**
     * Get nodesWithInlineCSS
     *
     * @return int $nodesWithInlineCSS
     */
    public function getNodesWithInlineCSS()
    {
        return $this->nodesWithInlineCSS;
    }

    /**
     * Set imagesScaledDown
     *
     * @param int $imagesScaledDown
     * @return self
     */
    public function setImagesScaledDown($imagesScaledDown)
    {
        $this->imagesScaledDown = $imagesScaledDown;
        return $this;
    }

    /**
     * Get imagesScaledDown
     *
     * @return int $imagesScaledDown
     */
    public function getImagesScaledDown()
    {
        return $this->imagesScaledDown;
    }

    /**
     * Set imagesWithoutDimensions
     *
     * @param int $imagesWithoutDimensions
     * @return self
     */
    public function setImagesWithoutDimensions($imagesWithoutDimensions)
    {
        $this->imagesWithoutDimensions = $imagesWithoutDimensions;
        return $this;
    }

    /**
     * Get imagesWithoutDimensions
     *
     * @return int $imagesWithoutDimensions
     */
    public function getImagesWithoutDimensions()
    {
        return $this->imagesWithoutDimensions;
    }

    /**
     * Set hiddenContentSize
     *
     * @param int $hiddenContentSize
     * @return self
     */
    public function setHiddenContentSize($hiddenContentSize)
    {
        $this->hiddenContentSize = $hiddenContentSize;
        return $this;
    }

    /**
     * Get hiddenContentSize
     *
     * @return int $hiddenContentSize
     */
    public function getHiddenContentSize()
    {
        return $this->hiddenContentSize;
    }

    /**
     * Set dOMmutationsInserts
     *
     * @param int $dOMmutationsInserts
     * @return self
     */
    public function setDOMmutationsInserts($dOMmutationsInserts)
    {
        $this->DOMmutationsInserts = $dOMmutationsInserts;
        return $this;
    }

    /**
     * Get dOMmutationsInserts
     *
     * @return int $dOMmutationsInserts
     */
    public function getDOMmutationsInserts()
    {
        return $this->DOMmutationsInserts;
    }

    /**
     * Set dOMmutationsRemoves
     *
     * @param int $dOMmutationsRemoves
     * @return self
     */
    public function setDOMmutationsRemoves($dOMmutationsRemoves)
    {
        $this->DOMmutationsRemoves = $dOMmutationsRemoves;
        return $this;
    }

    /**
     * Get dOMmutationsRemoves
     *
     * @return int $dOMmutationsRemoves
     */
    public function getDOMmutationsRemoves()
    {
        return $this->DOMmutationsRemoves;
    }

    /**
     * Set dOMmutationsAttributes
     *
     * @param int $dOMmutationsAttributes
     * @return self
     */
    public function setDOMmutationsAttributes($dOMmutationsAttributes)
    {
        $this->DOMmutationsAttributes = $dOMmutationsAttributes;
        return $this;
    }

    /**
     * Get dOMmutationsAttributes
     *
     * @return int $dOMmutationsAttributes
     */
    public function getDOMmutationsAttributes()
    {
        return $this->DOMmutationsAttributes;
    }

    /**
     * Set dOMqueries
     *
     * @param int $dOMqueries
     * @return self
     */
    public function setDOMqueries($dOMqueries)
    {
        $this->DOMqueries = $dOMqueries;
        return $this;
    }

    /**
     * Get dOMqueries
     *
     * @return int $dOMqueries
     */
    public function getDOMqueries()
    {
        return $this->DOMqueries;
    }

    /**
     * Set dOMqueriesById
     *
     * @param int $dOMqueriesById
     * @return self
     */
    public function setDOMqueriesById($dOMqueriesById)
    {
        $this->DOMqueriesById = $dOMqueriesById;
        return $this;
    }

    /**
     * Get dOMqueriesById
     *
     * @return int $dOMqueriesById
     */
    public function getDOMqueriesById()
    {
        return $this->DOMqueriesById;
    }

    /**
     * Set dOMqueriesByClassName
     *
     * @param int $dOMqueriesByClassName
     * @return self
     */
    public function setDOMqueriesByClassName($dOMqueriesByClassName)
    {
        $this->DOMqueriesByClassName = $dOMqueriesByClassName;
        return $this;
    }

    /**
     * Get dOMqueriesByClassName
     *
     * @return int $dOMqueriesByClassName
     */
    public function getDOMqueriesByClassName()
    {
        return $this->DOMqueriesByClassName;
    }

    /**
     * Set dOMqueriesByTagName
     *
     * @param int $dOMqueriesByTagName
     * @return self
     */
    public function setDOMqueriesByTagName($dOMqueriesByTagName)
    {
        $this->DOMqueriesByTagName = $dOMqueriesByTagName;
        return $this;
    }

    /**
     * Get dOMqueriesByTagName
     *
     * @return int $dOMqueriesByTagName
     */
    public function getDOMqueriesByTagName()
    {
        return $this->DOMqueriesByTagName;
    }

    /**
     * Set dOMqueriesByQuerySelectorAll
     *
     * @param int $dOMqueriesByQuerySelectorAll
     * @return self
     */
    public function setDOMqueriesByQuerySelectorAll($dOMqueriesByQuerySelectorAll)
    {
        $this->DOMqueriesByQuerySelectorAll = $dOMqueriesByQuerySelectorAll;
        return $this;
    }

    /**
     * Get dOMqueriesByQuerySelectorAll
     *
     * @return int $dOMqueriesByQuerySelectorAll
     */
    public function getDOMqueriesByQuerySelectorAll()
    {
        return $this->DOMqueriesByQuerySelectorAll;
    }

    /**
     * Set dOMinserts
     *
     * @param int $dOMinserts
     * @return self
     */
    public function setDOMinserts($dOMinserts)
    {
        $this->DOMinserts = $dOMinserts;
        return $this;
    }

    /**
     * Get dOMinserts
     *
     * @return int $dOMinserts
     */
    public function getDOMinserts()
    {
        return $this->DOMinserts;
    }

    /**
     * Set dOMqueriesDuplicated
     *
     * @param int $dOMqueriesDuplicated
     * @return self
     */
    public function setDOMqueriesDuplicated($dOMqueriesDuplicated)
    {
        $this->DOMqueriesDuplicated = $dOMqueriesDuplicated;
        return $this;
    }

    /**
     * Get dOMqueriesDuplicated
     *
     * @return int $dOMqueriesDuplicated
     */
    public function getDOMqueriesDuplicated()
    {
        return $this->DOMqueriesDuplicated;
    }

    /**
     * Set eventsBound
     *
     * @param int $eventsBound
     * @return self
     */
    public function setEventsBound($eventsBound)
    {
        $this->eventsBound = $eventsBound;
        return $this;
    }

    /**
     * Get eventsBound
     *
     * @return int $eventsBound
     */
    public function getEventsBound()
    {
        return $this->eventsBound;
    }

    /**
     * Set globalVariables
     *
     * @param int $globalVariables
     * @return self
     */
    public function setGlobalVariables($globalVariables)
    {
        $this->globalVariables = $globalVariables;
        return $this;
    }

    /**
     * Get globalVariables
     *
     * @return int $globalVariables
     */
    public function getGlobalVariables()
    {
        return $this->globalVariables;
    }

    /**
     * Set globalVariablesFalsy
     *
     * @param int $globalVariablesFalsy
     * @return self
     */
    public function setGlobalVariablesFalsy($globalVariablesFalsy)
    {
        $this->globalVariablesFalsy = $globalVariablesFalsy;
        return $this;
    }

    /**
     * Get globalVariablesFalsy
     *
     * @return int $globalVariablesFalsy
     */
    public function getGlobalVariablesFalsy()
    {
        return $this->globalVariablesFalsy;
    }

    /**
     * Set headersCount
     *
     * @param int $headersCount
     * @return self
     */
    public function setHeadersCount($headersCount)
    {
        $this->headersCount = $headersCount;
        return $this;
    }

    /**
     * Get headersCount
     *
     * @return int $headersCount
     */
    public function getHeadersCount()
    {
        return $this->headersCount;
    }

    /**
     * Set headersSentCount
     *
     * @param int $headersSentCount
     * @return self
     */
    public function setHeadersSentCount($headersSentCount)
    {
        $this->headersSentCount = $headersSentCount;
        return $this;
    }

    /**
     * Get headersSentCount
     *
     * @return int $headersSentCount
     */
    public function getHeadersSentCount()
    {
        return $this->headersSentCount;
    }

    /**
     * Set headersRecvCount
     *
     * @param int $headersRecvCount
     * @return self
     */
    public function setHeadersRecvCount($headersRecvCount)
    {
        $this->headersRecvCount = $headersRecvCount;
        return $this;
    }

    /**
     * Get headersRecvCount
     *
     * @return int $headersRecvCount
     */
    public function getHeadersRecvCount()
    {
        return $this->headersRecvCount;
    }

    /**
     * Set headersSize
     *
     * @param int $headersSize
     * @return self
     */
    public function setHeadersSize($headersSize)
    {
        $this->headersSize = $headersSize;
        return $this;
    }

    /**
     * Get headersSize
     *
     * @return int $headersSize
     */
    public function getHeadersSize()
    {
        return $this->headersSize;
    }

    /**
     * Set headersSentSize
     *
     * @param int $headersSentSize
     * @return self
     */
    public function setHeadersSentSize($headersSentSize)
    {
        $this->headersSentSize = $headersSentSize;
        return $this;
    }

    /**
     * Get headersSentSize
     *
     * @return int $headersSentSize
     */
    public function getHeadersSentSize()
    {
        return $this->headersSentSize;
    }

    /**
     * Set headersRecvSize
     *
     * @param int $headersRecvSize
     * @return self
     */
    public function setHeadersRecvSize($headersRecvSize)
    {
        $this->headersRecvSize = $headersRecvSize;
        return $this;
    }

    /**
     * Get headersRecvSize
     *
     * @return int $headersRecvSize
     */
    public function getHeadersRecvSize()
    {
        return $this->headersRecvSize;
    }

    /**
     * Set headersBiggerThanContent
     *
     * @param int $headersBiggerThanContent
     * @return self
     */
    public function setHeadersBiggerThanContent($headersBiggerThanContent)
    {
        $this->headersBiggerThanContent = $headersBiggerThanContent;
        return $this;
    }

    /**
     * Get headersBiggerThanContent
     *
     * @return int $headersBiggerThanContent
     */
    public function getHeadersBiggerThanContent()
    {
        return $this->headersBiggerThanContent;
    }

    /**
     * Set documentWriteCalls
     *
     * @param int $documentWriteCalls
     * @return self
     */
    public function setDocumentWriteCalls($documentWriteCalls)
    {
        $this->documentWriteCalls = $documentWriteCalls;
        return $this;
    }

    /**
     * Get documentWriteCalls
     *
     * @return int $documentWriteCalls
     */
    public function getDocumentWriteCalls()
    {
        return $this->documentWriteCalls;
    }

    /**
     * Set evalCalls
     *
     * @param int $evalCalls
     * @return self
     */
    public function setEvalCalls($evalCalls)
    {
        $this->evalCalls = $evalCalls;
        return $this;
    }

    /**
     * Get evalCalls
     *
     * @return int $evalCalls
     */
    public function getEvalCalls()
    {
        return $this->evalCalls;
    }

    /**
     * Set jQueryVersion
     *
     * @param int $jQueryVersion
     * @return self
     */
    public function setJQueryVersion($jQueryVersion)
    {
        $this->jQueryVersion = $jQueryVersion;
        return $this;
    }

    /**
     * Get jQueryVersion
     *
     * @return int $jQueryVersion
     */
    public function getJQueryVersion()
    {
        return $this->jQueryVersion;
    }

    /**
     * Set jQueryOnDOMReadyFunctions
     *
     * @param int $jQueryOnDOMReadyFunctions
     * @return self
     */
    public function setJQueryOnDOMReadyFunctions($jQueryOnDOMReadyFunctions)
    {
        $this->jQueryOnDOMReadyFunctions = $jQueryOnDOMReadyFunctions;
        return $this;
    }

    /**
     * Get jQueryOnDOMReadyFunctions
     *
     * @return int $jQueryOnDOMReadyFunctions
     */
    public function getJQueryOnDOMReadyFunctions()
    {
        return $this->jQueryOnDOMReadyFunctions;
    }

    /**
     * Set jQuerySizzleCalls
     *
     * @param int $jQuerySizzleCalls
     * @return self
     */
    public function setJQuerySizzleCalls($jQuerySizzleCalls)
    {
        $this->jQuerySizzleCalls = $jQuerySizzleCalls;
        return $this;
    }

    /**
     * Get jQuerySizzleCalls
     *
     * @return int $jQuerySizzleCalls
     */
    public function getJQuerySizzleCalls()
    {
        return $this->jQuerySizzleCalls;
    }

    /**
     * Set jsErrors
     *
     * @param int $jsErrors
     * @return self
     */
    public function setJsErrors($jsErrors)
    {
        $this->jsErrors = $jsErrors;
        return $this;
    }

    /**
     * Get jsErrors
     *
     * @return int $jsErrors
     */
    public function getJsErrors()
    {
        return $this->jsErrors;
    }

    /**
     * Set localStorageEntries
     *
     * @param int $localStorageEntries
     * @return self
     */
    public function setLocalStorageEntries($localStorageEntries)
    {
        $this->localStorageEntries = $localStorageEntries;
        return $this;
    }

    /**
     * Get localStorageEntries
     *
     * @return int $localStorageEntries
     */
    public function getLocalStorageEntries()
    {
        return $this->localStorageEntries;
    }

    /**
     * Set redirects
     *
     * @param int $redirects
     * @return self
     */
    public function setRedirects($redirects)
    {
        $this->redirects = $redirects;
        return $this;
    }

    /**
     * Get redirects
     *
     * @return int $redirects
     */
    public function getRedirects()
    {
        return $this->redirects;
    }

    /**
     * Set redirectsTime
     *
     * @param int $redirectsTime
     * @return self
     */
    public function setRedirectsTime($redirectsTime)
    {
        $this->redirectsTime = $redirectsTime;
        return $this;
    }

    /**
     * Get redirectsTime
     *
     * @return int $redirectsTime
     */
    public function getRedirectsTime()
    {
        return $this->redirectsTime;
    }

    /**
     * Set assetsNotGzipped
     *
     * @param int $assetsNotGzipped
     * @return self
     */
    public function setAssetsNotGzipped($assetsNotGzipped)
    {
        $this->assetsNotGzipped = $assetsNotGzipped;
        return $this;
    }

    /**
     * Get assetsNotGzipped
     *
     * @return int $assetsNotGzipped
     */
    public function getAssetsNotGzipped()
    {
        return $this->assetsNotGzipped;
    }

    /**
     * Set assetsWithQueryString
     *
     * @param int $assetsWithQueryString
     * @return self
     */
    public function setAssetsWithQueryString($assetsWithQueryString)
    {
        $this->assetsWithQueryString = $assetsWithQueryString;
        return $this;
    }

    /**
     * Get assetsWithQueryString
     *
     * @return int $assetsWithQueryString
     */
    public function getAssetsWithQueryString()
    {
        return $this->assetsWithQueryString;
    }

    /**
     * Set assetsWithCookies
     *
     * @param int $assetsWithCookies
     * @return self
     */
    public function setAssetsWithCookies($assetsWithCookies)
    {
        $this->assetsWithCookies = $assetsWithCookies;
        return $this;
    }

    /**
     * Get assetsWithCookies
     *
     * @return int $assetsWithCookies
     */
    public function getAssetsWithCookies()
    {
        return $this->assetsWithCookies;
    }

    /**
     * Set smallImages
     *
     * @param int $smallImages
     * @return self
     */
    public function setSmallImages($smallImages)
    {
        $this->smallImages = $smallImages;
        return $this;
    }

    /**
     * Get smallImages
     *
     * @return int $smallImages
     */
    public function getSmallImages()
    {
        return $this->smallImages;
    }

    /**
     * Set multipleRequests
     *
     * @param int $multipleRequests
     * @return self
     */
    public function setMultipleRequests($multipleRequests)
    {
        $this->multipleRequests = $multipleRequests;
        return $this;
    }

    /**
     * Get multipleRequests
     *
     * @return int $multipleRequests
     */
    public function getMultipleRequests()
    {
        return $this->multipleRequests;
    }

    /**
     * Set timeToFirstCss
     *
     * @param int $timeToFirstCss
     * @return self
     */
    public function setTimeToFirstCss($timeToFirstCss)
    {
        $this->timeToFirstCss = $timeToFirstCss;
        return $this;
    }

    /**
     * Get timeToFirstCss
     *
     * @return int $timeToFirstCss
     */
    public function getTimeToFirstCss()
    {
        return $this->timeToFirstCss;
    }

    /**
     * Set timeToFirstJs
     *
     * @param int $timeToFirstJs
     * @return self
     */
    public function setTimeToFirstJs($timeToFirstJs)
    {
        $this->timeToFirstJs = $timeToFirstJs;
        return $this;
    }

    /**
     * Get timeToFirstJs
     *
     * @return int $timeToFirstJs
     */
    public function getTimeToFirstJs()
    {
        return $this->timeToFirstJs;
    }

    /**
     * Set timeToFirstImage
     *
     * @param int $timeToFirstImage
     * @return self
     */
    public function setTimeToFirstImage($timeToFirstImage)
    {
        $this->timeToFirstImage = $timeToFirstImage;
        return $this;
    }

    /**
     * Get timeToFirstImage
     *
     * @return int $timeToFirstImage
     */
    public function getTimeToFirstImage()
    {
        return $this->timeToFirstImage;
    }

    /**
     * Set domInteractive
     *
     * @param int $domInteractive
     * @return self
     */
    public function setDomInteractive($domInteractive)
    {
        $this->domInteractive = $domInteractive;
        return $this;
    }

    /**
     * Get domInteractive
     *
     * @return int $domInteractive
     */
    public function getDomInteractive()
    {
        return $this->domInteractive;
    }

    /**
     * Set domContentLoaded
     *
     * @param int $domContentLoaded
     * @return self
     */
    public function setDomContentLoaded($domContentLoaded)
    {
        $this->domContentLoaded = $domContentLoaded;
        return $this;
    }

    /**
     * Get domContentLoaded
     *
     * @return int $domContentLoaded
     */
    public function getDomContentLoaded()
    {
        return $this->domContentLoaded;
    }

    /**
     * Set domContentLoadedEnd
     *
     * @param int $domContentLoadedEnd
     * @return self
     */
    public function setDomContentLoadedEnd($domContentLoadedEnd)
    {
        $this->domContentLoadedEnd = $domContentLoadedEnd;
        return $this;
    }

    /**
     * Get domContentLoadedEnd
     *
     * @return int $domContentLoadedEnd
     */
    public function getDomContentLoadedEnd()
    {
        return $this->domContentLoadedEnd;
    }

    /**
     * Set domComplete
     *
     * @param int $domComplete
     * @return self
     */
    public function setDomComplete($domComplete)
    {
        $this->domComplete = $domComplete;
        return $this;
    }

    /**
     * Get domComplete
     *
     * @return int $domComplete
     */
    public function getDomComplete()
    {
        return $this->domComplete;
    }

    /**
     * Set timeBackend
     *
     * @param int $timeBackend
     * @return self
     */
    public function setTimeBackend($timeBackend)
    {
        $this->timeBackend = $timeBackend;
        return $this;
    }

    /**
     * Get timeBackend
     *
     * @return int $timeBackend
     */
    public function getTimeBackend()
    {
        return $this->timeBackend;
    }

    /**
     * Set timeFrontend
     *
     * @param int $timeFrontend
     * @return self
     */
    public function setTimeFrontend($timeFrontend)
    {
        $this->timeFrontend = $timeFrontend;
        return $this;
    }

    /**
     * Get timeFrontend
     *
     * @return int $timeFrontend
     */
    public function getTimeFrontend()
    {
        return $this->timeFrontend;
    }

    /**
     * Set statusCodesTrail
     *
     * @param int $statusCodesTrail
     * @return self
     */
    public function setStatusCodesTrail($statusCodesTrail)
    {
        $this->statusCodesTrail = $statusCodesTrail;
        return $this;
    }

    /**
     * Get statusCodesTrail
     *
     * @return int $statusCodesTrail
     */
    public function getStatusCodesTrail()
    {
        return $this->statusCodesTrail;
    }

    /**
     * Set windowAlerts
     *
     * @param int $windowAlerts
     * @return self
     */
    public function setWindowAlerts($windowAlerts)
    {
        $this->windowAlerts = $windowAlerts;
        return $this;
    }

    /**
     * Get windowAlerts
     *
     * @return int $windowAlerts
     */
    public function getWindowAlerts()
    {
        return $this->windowAlerts;
    }

    /**
     * Set windowConfirms
     *
     * @param int $windowConfirms
     * @return self
     */
    public function setWindowConfirms($windowConfirms)
    {
        $this->windowConfirms = $windowConfirms;
        return $this;
    }

    /**
     * Get windowConfirms
     *
     * @return int $windowConfirms
     */
    public function getWindowConfirms()
    {
        return $this->windowConfirms;
    }

    /**
     * Set windowPrompts
     *
     * @param int $windowPrompts
     * @return self
     */
    public function setWindowPrompts($windowPrompts)
    {
        $this->windowPrompts = $windowPrompts;
        return $this;
    }

    /**
     * Get windowPrompts
     *
     * @return int $windowPrompts
     */
    public function getWindowPrompts()
    {
        return $this->windowPrompts;
    }

    /**
     * Set bodyHTMLSize
     *
     * @param int $bodyHTMLSize
     * @return self
     */
    public function setBodyHTMLSize($bodyHTMLSize)
    {
        $this->bodyHTMLSize = $bodyHTMLSize;
        return $this;
    }

    /**
     * Get bodyHTMLSize
     *
     * @return int $bodyHTMLSize
     */
    public function getBodyHTMLSize()
    {
        return $this->bodyHTMLSize;
    }

    /**
     * Set iframesCount
     *
     * @param int $iframesCount
     * @return self
     */
    public function setIframesCount($iframesCount)
    {
        $this->iframesCount = $iframesCount;
        return $this;
    }

    /**
     * Get iframesCount
     *
     * @return int $iframesCount
     */
    public function getIframesCount()
    {
        return $this->iframesCount;
    }

    /**
     * Set smallestResponse
     *
     * @param int $smallestResponse
     * @return self
     */
    public function setSmallestResponse($smallestResponse)
    {
        $this->smallestResponse = $smallestResponse;
        return $this;
    }

    /**
     * Get smallestResponse
     *
     * @return int $smallestResponse
     */
    public function getSmallestResponse()
    {
        return $this->smallestResponse;
    }

    /**
     * Set biggestResponse
     *
     * @param int $biggestResponse
     * @return self
     */
    public function setBiggestResponse($biggestResponse)
    {
        $this->biggestResponse = $biggestResponse;
        return $this;
    }

    /**
     * Get biggestResponse
     *
     * @return int $biggestResponse
     */
    public function getBiggestResponse()
    {
        return $this->biggestResponse;
    }

    /**
     * Set fastestResponse
     *
     * @param int $fastestResponse
     * @return self
     */
    public function setFastestResponse($fastestResponse)
    {
        $this->fastestResponse = $fastestResponse;
        return $this;
    }

    /**
     * Get fastestResponse
     *
     * @return int $fastestResponse
     */
    public function getFastestResponse()
    {
        return $this->fastestResponse;
    }

    /**
     * Set slowestResponse
     *
     * @param int $slowestResponse
     * @return self
     */
    public function setSlowestResponse($slowestResponse)
    {
        $this->slowestResponse = $slowestResponse;
        return $this;
    }

    /**
     * Get slowestResponse
     *
     * @return int $slowestResponse
     */
    public function getSlowestResponse()
    {
        return $this->slowestResponse;
    }

    /**
     * Set smallestLatency
     *
     * @param int $smallestLatency
     * @return self
     */
    public function setSmallestLatency($smallestLatency)
    {
        $this->smallestLatency = $smallestLatency;
        return $this;
    }

    /**
     * Get smallestLatency
     *
     * @return int $smallestLatency
     */
    public function getSmallestLatency()
    {
        return $this->smallestLatency;
    }

    /**
     * Set biggestLatency
     *
     * @param int $biggestLatency
     * @return self
     */
    public function setBiggestLatency($biggestLatency)
    {
        $this->biggestLatency = $biggestLatency;
        return $this;
    }

    /**
     * Get biggestLatency
     *
     * @return int $biggestLatency
     */
    public function getBiggestLatency()
    {
        return $this->biggestLatency;
    }

    /**
     * Set medianResponse
     *
     * @param int $medianResponse
     * @return self
     */
    public function setMedianResponse($medianResponse)
    {
        $this->medianResponse = $medianResponse;
        return $this;
    }

    /**
     * Get medianResponse
     *
     * @return int $medianResponse
     */
    public function getMedianResponse()
    {
        return $this->medianResponse;
    }

    /**
     * Set medianLatency
     *
     * @param int $medianLatency
     * @return self
     */
    public function setMedianLatency($medianLatency)
    {
        $this->medianLatency = $medianLatency;
        return $this;
    }

    /**
     * Get medianLatency
     *
     * @return int $medianLatency
     */
    public function getMedianLatency()
    {
        return $this->medianLatency;
    }
}
