<?php
/**
 * DatabaseAnnotations automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Notion;

use PSX\Schema\Attribute\Description;

#[Description('')]
class DatabaseAnnotations implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('')]
    protected ?bool $bold = null;
    #[Description('')]
    protected ?bool $italic = null;
    #[Description('')]
    protected ?bool $strikethrough = null;
    #[Description('')]
    protected ?bool $underline = null;
    #[Description('')]
    protected ?bool $code = null;
    #[Description('')]
    protected ?string $color = null;
    public function setBold(?bool $bold): void
    {
        $this->bold = $bold;
    }
    public function getBold(): ?bool
    {
        return $this->bold;
    }
    public function setItalic(?bool $italic): void
    {
        $this->italic = $italic;
    }
    public function getItalic(): ?bool
    {
        return $this->italic;
    }
    public function setStrikethrough(?bool $strikethrough): void
    {
        $this->strikethrough = $strikethrough;
    }
    public function getStrikethrough(): ?bool
    {
        return $this->strikethrough;
    }
    public function setUnderline(?bool $underline): void
    {
        $this->underline = $underline;
    }
    public function getUnderline(): ?bool
    {
        return $this->underline;
    }
    public function setCode(?bool $code): void
    {
        $this->code = $code;
    }
    public function getCode(): ?bool
    {
        return $this->code;
    }
    public function setColor(?string $color): void
    {
        $this->color = $color;
    }
    public function getColor(): ?string
    {
        return $this->color;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('bold', $this->bold);
        $record->put('italic', $this->italic);
        $record->put('strikethrough', $this->strikethrough);
        $record->put('underline', $this->underline);
        $record->put('code', $this->code);
        $record->put('color', $this->color);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
