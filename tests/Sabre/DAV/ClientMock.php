<?php declare (strict_types=1);

namespace Sabre\DAV;

use Sabre\HTTP\RequestInterface;
use Sabre\HTTP\ResponseInterface;

class ClientMock extends Client {

    public $request;
    public $response;

    public $url;
    public $curlSettings;

    /**
     * Just making this method public
     *
     * @param string $url
     * @return string
     */
    function getAbsoluteUrl($url) {

        return parent::getAbsoluteUrl($url);

    }

    function doRequest(RequestInterface $request) : ResponseInterface {

        $this->request = $request;
        return $this->response;

    }

}
