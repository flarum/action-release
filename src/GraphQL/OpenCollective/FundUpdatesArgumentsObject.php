<?php

namespace Flarum\Release\GraphQL\OpenCollective;

class FundUpdatesArgumentsObject extends \GraphQL\SchemaObject\ArgumentsObject
{
    protected int $limit;
    protected int $offset;
    protected bool $onlyPublishedUpdates;
    protected bool $onlyChangelogUpdates;
    protected ChronologicalOrderInputInputObject $orderBy;
    protected string $searchTerm;

    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    public function setOffset($offset)
    {
        $this->offset = $offset;
        return $this;
    }

    public function setOnlyPublishedUpdates($onlyPublishedUpdates)
    {
        $this->onlyPublishedUpdates = $onlyPublishedUpdates;
        return $this;
    }

    public function setOnlyChangelogUpdates($onlyChangelogUpdates)
    {
        $this->onlyChangelogUpdates = $onlyChangelogUpdates;
        return $this;
    }

    public function setOrderBy(ChronologicalOrderInputInputObject $orderBy)
    {
        $this->orderBy = $orderBy;
        return $this;
    }

    public function setSearchTerm($searchTerm)
    {
        $this->searchTerm = $searchTerm;
        return $this;
    }
}
