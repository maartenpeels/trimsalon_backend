<?php

namespace App\Http\Controllers;

use App\Exceptions\ValidatorException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws ValidatorException
     */
    public function attemptLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            throw new ValidatorException('Something went wrong login you in', $errors, Response::HTTP_BAD_REQUEST);
        }

        $client = new Client();

        $response = $client->post(URL::to('/oauth/token'), [
            'form_params' => [
                'grant_type'    => 'password',
                'client_id'     => env('PASSWORD_CLIENT_ID'),
                'client_secret' => env('PASSWORD_CLIENT_SECRET'),
                'username'      => $request->get('email'),
                'password'      => $request->get('password'),
                'scope'         => '*',
            ],
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Successfully logged in!',
            'data'    => json_decode((string)$response->getBody(), true)
        ], Response::HTTP_OK);
    }
}
