<?php
/**
 * Person automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Notion;

use PSX\Schema\Attribute\Description;

#[Description('')]
class Person implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('')]
    protected ?string $email = null;
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }
    public function getEmail(): ?string
    {
        return $this->email;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('email', $this->email);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
