<?php
/**
 * File automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Notion;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Key;

#[Description('')]
class File implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('')]
    protected ?string $url = null;
    #[Key('expiry_time')]
    #[Description('')]
    protected ?\PSX\DateTime\LocalDateTime $expiryTime = null;
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }
    public function getUrl(): ?string
    {
        return $this->url;
    }
    public function setExpiryTime(?\PSX\DateTime\LocalDateTime $expiryTime): void
    {
        $this->expiryTime = $expiryTime;
    }
    public function getExpiryTime(): ?\PSX\DateTime\LocalDateTime
    {
        return $this->expiryTime;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('url', $this->url);
        $record->put('expiry_time', $this->expiryTime);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
