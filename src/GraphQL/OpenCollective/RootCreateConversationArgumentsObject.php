<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class RootCreateConversationArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected string $title;
    protected string $html;
    protected string $CollectiveId;
    protected array $tags;

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function setHtml($html)
    {
        $this->html = $html;
        return $this;
    }

    public function setCollectiveId($collectiveId)
    {
        $this->CollectiveId = $collectiveId;
        return $this;
    }

    public function setTags(array $tags)
    {
        $this->tags = $tags;
        return $this;
    }
}
