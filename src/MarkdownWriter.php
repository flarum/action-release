<?php

namespace Flarum\Release;

class MarkdownWriter
{
    /**
     * @var false|resource
     */
    private $stream;

    public function __construct(public string $path)
    {
        $this->stream = fopen(__DIR__ . "/../out/$path.md", 'w');
    }

    public function header(string $title, int $weight = 1): static
    {
        $this->writeLine(str_repeat('#', $weight) . " $title");

        return $this;
    }

    public function li(string $listItem): static
    {
        $this->writeLine("- $listItem");

        return $this;
    }

    public function comment(string $comment): static
    {
        $this->writeLine("__{$comment}__");

        return $this;
    }

    public function divider(): static
    {
        $this->writeLine("\n---\n");

        return $this;
    }

    protected function writeLine(string $line)
    {
        fwrite($this->stream, "$line\n");
    }

    public function close()
    {
        fclose($this->stream);
    }

    public function __toString(): string
    {
        return file_get_contents(__DIR__ . "/../out/$this->path.md");
    }
}