<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace LukeHagar\Plex_API;

use LukeHagar\Plex_API\Models\Operations;
use Speakeasy\Serializer\DeserializationContext;

class Server
{
    private SDKConfiguration $sdkConfiguration;
    /**
     * @param  SDKConfiguration  $sdkConfig
     */
    public function __construct(public SDKConfiguration $sdkConfig)
    {
        $this->sdkConfiguration = $sdkConfig;
    }

    /**
     * Get Server Capabilities
     *
     * Get Server Capabilities
     *
     * @return Operations\GetServerCapabilitiesResponse
     * @throws \LukeHagar\Plex_API\Models\Errors\SDKException
     */
    public function getServerCapabilities(): Operations\GetServerCapabilitiesResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/');
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\LukeHagar\Plex_API\Models\Operations\GetServerCapabilitiesResponseBody', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetServerCapabilitiesResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    object: $obj);

                return $response;
            } else {
                throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\LukeHagar\Plex_API\Models\Errors\GetServerCapabilitiesBadRequest', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $obj->rawResponse = $httpResponse;
                throw $obj->toException();
            } else {
                throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\LukeHagar\Plex_API\Models\Errors\GetServerCapabilitiesUnauthorized', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $obj->rawResponse = $httpResponse;
                throw $obj->toException();
            } else {
                throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \LukeHagar\Plex_API\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Get Server Preferences
     *
     * Get Server Preferences
     *
     * @return Operations\GetServerPreferencesResponse
     * @throws \LukeHagar\Plex_API\Models\Errors\SDKException
     */
    public function getServerPreferences(): Operations\GetServerPreferencesResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/:/prefs');
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\LukeHagar\Plex_API\Models\Operations\GetServerPreferencesResponseBody', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetServerPreferencesResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    object: $obj);

                return $response;
            } else {
                throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\LukeHagar\Plex_API\Models\Errors\GetServerPreferencesBadRequest', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $obj->rawResponse = $httpResponse;
                throw $obj->toException();
            } else {
                throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\LukeHagar\Plex_API\Models\Errors\GetServerPreferencesUnauthorized', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $obj->rawResponse = $httpResponse;
                throw $obj->toException();
            } else {
                throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \LukeHagar\Plex_API\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Get Available Clients
     *
     * Get Available Clients
     *
     * @return Operations\GetAvailableClientsResponse
     * @throws \LukeHagar\Plex_API\Models\Errors\SDKException
     */
    public function getAvailableClients(): Operations\GetAvailableClientsResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/clients');
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\LukeHagar\Plex_API\Models\Operations\GetAvailableClientsResponseBody', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetAvailableClientsResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    object: $obj);

                return $response;
            } else {
                throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\LukeHagar\Plex_API\Models\Errors\GetAvailableClientsBadRequest', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $obj->rawResponse = $httpResponse;
                throw $obj->toException();
            } else {
                throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\LukeHagar\Plex_API\Models\Errors\GetAvailableClientsUnauthorized', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $obj->rawResponse = $httpResponse;
                throw $obj->toException();
            } else {
                throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \LukeHagar\Plex_API\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Get Devices
     *
     * Get Devices
     *
     * @return Operations\GetDevicesResponse
     * @throws \LukeHagar\Plex_API\Models\Errors\SDKException
     */
    public function getDevices(): Operations\GetDevicesResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/devices');
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\LukeHagar\Plex_API\Models\Operations\GetDevicesResponseBody', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetDevicesResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    object: $obj);

                return $response;
            } else {
                throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\LukeHagar\Plex_API\Models\Errors\GetDevicesBadRequest', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $obj->rawResponse = $httpResponse;
                throw $obj->toException();
            } else {
                throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\LukeHagar\Plex_API\Models\Errors\GetDevicesUnauthorized', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $obj->rawResponse = $httpResponse;
                throw $obj->toException();
            } else {
                throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \LukeHagar\Plex_API\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Get Server Identity
     *
     * This request is useful to determine if the server is online or offline
     *
     * @return Operations\GetServerIdentityResponse
     * @throws \LukeHagar\Plex_API\Models\Errors\SDKException
     */
    public function getServerIdentity(): Operations\GetServerIdentityResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/identity');
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);
        $httpResponse = $this->sdkConfiguration->defaultClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\LukeHagar\Plex_API\Models\Operations\GetServerIdentityResponseBody', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetServerIdentityResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    object: $obj);

                return $response;
            } else {
                throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 408) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\LukeHagar\Plex_API\Models\Errors\GetServerIdentityRequestTimeout', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $obj->rawResponse = $httpResponse;
                throw $obj->toException();
            } else {
                throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \LukeHagar\Plex_API\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Get MyPlex Account
     *
     * Returns MyPlex Account Information
     *
     * @return Operations\GetMyPlexAccountResponse
     * @throws \LukeHagar\Plex_API\Models\Errors\SDKException
     */
    public function getMyPlexAccount(): Operations\GetMyPlexAccountResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/myplex/account');
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\LukeHagar\Plex_API\Models\Operations\GetMyPlexAccountResponseBody', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetMyPlexAccountResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    object: $obj);

                return $response;
            } else {
                throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\LukeHagar\Plex_API\Models\Errors\GetMyPlexAccountBadRequest', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $obj->rawResponse = $httpResponse;
                throw $obj->toException();
            } else {
                throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\LukeHagar\Plex_API\Models\Errors\GetMyPlexAccountUnauthorized', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $obj->rawResponse = $httpResponse;
                throw $obj->toException();
            } else {
                throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \LukeHagar\Plex_API\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Get a Resized Photo
     *
     * Plex's Photo transcoder is used throughout the service to serve images at specified sizes.
     *
     *
     * @param  Operations\GetResizedPhotoRequest  $request
     * @return Operations\GetResizedPhotoResponse
     * @throws \LukeHagar\Plex_API\Models\Errors\SDKException
     */
    public function getResizedPhoto(Operations\GetResizedPhotoRequest $request): Operations\GetResizedPhotoResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/photo/:/transcode');
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(Operations\GetResizedPhotoRequest::class, $request, $this->sdkConfiguration->globals));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            return new Operations\GetResizedPhotoResponse(
                statusCode: $statusCode,
                contentType: $contentType,
                rawResponse: $httpResponse
            );
        } elseif ($statusCode == 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\LukeHagar\Plex_API\Models\Errors\GetResizedPhotoBadRequest', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $obj->rawResponse = $httpResponse;
                throw $obj->toException();
            } else {
                throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\LukeHagar\Plex_API\Models\Errors\GetResizedPhotoUnauthorized', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $obj->rawResponse = $httpResponse;
                throw $obj->toException();
            } else {
                throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \LukeHagar\Plex_API\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Get Media Providers
     *
     * Retrieves media providers and their features from the Plex server.
     *
     * @param  string  $xPlexToken
     * @return Operations\GetMediaProvidersResponse
     * @throws \LukeHagar\Plex_API\Models\Errors\SDKException
     */
    public function getMediaProviders(string $xPlexToken): Operations\GetMediaProvidersResponse
    {
        $request = new Operations\GetMediaProvidersRequest(
            xPlexToken: $xPlexToken,
        );
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/media/providers');
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request, $this->sdkConfiguration->globals));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\LukeHagar\Plex_API\Models\Operations\GetMediaProvidersResponseBody', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetMediaProvidersResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    object: $obj);

                return $response;
            } else {
                throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\LukeHagar\Plex_API\Models\Errors\GetMediaProvidersBadRequest', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $obj->rawResponse = $httpResponse;
                throw $obj->toException();
            } else {
                throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\LukeHagar\Plex_API\Models\Errors\GetMediaProvidersUnauthorized', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $obj->rawResponse = $httpResponse;
                throw $obj->toException();
            } else {
                throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \LukeHagar\Plex_API\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Get Server List
     *
     * Get Server List
     *
     * @return Operations\GetServerListResponse
     * @throws \LukeHagar\Plex_API\Models\Errors\SDKException
     */
    public function getServerList(): Operations\GetServerListResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/servers');
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\LukeHagar\Plex_API\Models\Operations\GetServerListResponseBody', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetServerListResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    object: $obj);

                return $response;
            } else {
                throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\LukeHagar\Plex_API\Models\Errors\GetServerListBadRequest', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $obj->rawResponse = $httpResponse;
                throw $obj->toException();
            } else {
                throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\LukeHagar\Plex_API\Models\Errors\GetServerListUnauthorized', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $obj->rawResponse = $httpResponse;
                throw $obj->toException();
            } else {
                throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \LukeHagar\Plex_API\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \LukeHagar\Plex_API\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

}