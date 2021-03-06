<?php

namespace Liberatus\Action;

use Common\Action\ActionInterface;
use Interop\Http\ServerMiddleware\DelegateInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class RefreshAction implements ActionInterface
{
    /**
     * @param ServerRequestInterface $request
     * @param DelegateInterface      $delegate
     * @return ResponseInterface
     */
    public function process(ServerRequestInterface $request, DelegateInterface $delegate): ResponseInterface
    {
        var_dump('ok'); die();
        $item = new Item($do, new CheckTransformer(), $this->getResourceName($do));

        $request = $request
            ->withAttribute(self::RESPONSE, $item)
            ->withAttribute(self::HTTP_CODE, Response::STATUS_CODE_200);

        return $delegate->process($request);
    }

}