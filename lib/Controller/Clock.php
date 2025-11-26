<?php
/**
 * Oasys Digital Signage
 */
namespace Xibo\Controller;


use Carbon\Carbon;
use Slim\Http\Response as Response;
use Slim\Http\ServerRequest as Request;
use Xibo\Helper\Session;

/**
 * Class Clock
 * @package Xibo\Controller
 */
class Clock extends Base
{
    /**
     * @var Session
     */
    private $session;

    /**
     * Set common dependencies.
     * @param Session $session
     */
    public function __construct($session)
    {
        $this->session = $session;
    }

    /**
     * Gets the Time
     *
     * @SWG\Get(
     *  path="/clock",
     *  operationId="clock",
     *  tags={"misc"},
     *  description="The Time",
     *  summary="The current CMS time",
     *  @SWG\Response(
     *      response=200,
     *      description="successful response",
     *      @SWG\Schema(
     *          type="object",
     *          additionalProperties={"title":"time", "type":"string"}
     *      )
     *  )
     * )
     *
     * @param Request $request
     * @param Response $response
     * @return \Psr\Http\Message\ResponseInterface|Response
     * @throws \Xibo\Support\Exception\ControllerNotImplemented
     * @throws \Xibo\Support\Exception\GeneralException
     */
    public function clock(Request $request, Response $response)
    {
        $this->session->refreshExpiry = false;

        if ($request->isXhr() || $this->isApi($request)) {
            $output = Carbon::now()->format('H:i T');

            $this->getState()->setData(array('time' => $output));
            $this->getState()->html = $output;
            $this->getState()->clockUpdate = true;
            $this->getState()->success = true;
            return $this->render($request, $response);
        } else {
            // We are returning the response directly, so write the body.
            $response->getBody()->write(Carbon::now()->format('c'));
            return $response;
        }
    }
}
