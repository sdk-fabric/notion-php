<?php
/**
 * Client automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Notion;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\ClientAbstract;
use Sdkgen\Client\Credentials;
use Sdkgen\Client\CredentialsInterface;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\Payload;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TokenStoreInterface;

class Client extends ClientAbstract
{
    public function user(): UserTag
    {
        return new UserTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function database(): DatabaseTag
    {
        return new DatabaseTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function page(): PageTag
    {
        return new PageTag(
            $this->httpClient,
            $this->parser
        );
    }



    public static function build(string $token): self
    {
        return new self('https://api.notion.com', new Credentials\HttpBearer($token));
    }

    public static function buildAnonymous(): self
    {
        return new self('https://api.notion.com', new Credentials\Anonymous());
    }
}
