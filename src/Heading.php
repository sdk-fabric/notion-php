<?php
/**
 * Heading automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Notion;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Key;

#[Description('')]
class Heading implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<RichText>|null
     */
    #[Key('rich_text')]
    #[Description('')]
    protected ?array $richText = null;
    #[Description('')]
    protected ?string $color = null;
    #[Key('is_toggleable')]
    #[Description('')]
    protected ?bool $isToggleable = null;
    /**
     * @param array<RichText>|null $richText
     */
    public function setRichText(?array $richText): void
    {
        $this->richText = $richText;
    }
    /**
     * @return array<RichText>|null
     */
    public function getRichText(): ?array
    {
        return $this->richText;
    }
    public function setColor(?string $color): void
    {
        $this->color = $color;
    }
    public function getColor(): ?string
    {
        return $this->color;
    }
    public function setIsToggleable(?bool $isToggleable): void
    {
        $this->isToggleable = $isToggleable;
    }
    public function getIsToggleable(): ?bool
    {
        return $this->isToggleable;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('rich_text', $this->richText);
        $record->put('color', $this->color);
        $record->put('is_toggleable', $this->isToggleable);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
