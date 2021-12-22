<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Entities;

use Illuminate\Support\Collection;
use Webparking\LaravelCash\Resources\Item as ItemResource;

class Item extends BaseEntity
{
    protected string $endpoint = '2260';

    protected string $resource = ItemResource::class;

    public function get(string $identifier): ?ItemResource
    {
        return parent::get($identifier);
    }

    public function filterItemGroup(
        string $itemGroup,
        bool $withStock = false,
        bool $omitPurchasePrice = false,
        bool $ignoreWebShopLink = false,
        bool $omitImages = false
    ): Collection {
        $prefix = $this->booleanFilterPrefix($withStock, $omitPurchasePrice, $ignoreWebShopLink, $omitImages);

        return $this->index("{$prefix}G|$itemGroup");
    }

    /** @param int|string $days */
    public function filterDaysSinceLastMutation(
        $days,
        bool $withStock = false,
        bool $omitPurchasePrice = false,
        bool $ignoreWebShopLink = false,
        bool $omitImages = false
    ): Collection {
        $prefix = $this->booleanFilterPrefix($withStock, $omitPurchasePrice, $ignoreWebShopLink, $omitImages);

        return $this->index("{$prefix}W|$days");
    }

    public function filterOptions(
        bool $withStock = false,
        bool $omitPurchasePrice = false,
        bool $ignoreWebShopLink = false,
        bool $omitImages = false
    ): Collection {
        return $this->index(
            $this->booleanFilterPrefix($withStock, $omitPurchasePrice, $ignoreWebShopLink, $omitImages)
        );
    }

    private function booleanFilterPrefix(
        bool $withStock = false,
        bool $omitPurchasePrice = false,
        bool $ignoreWebShopLink = false,
        bool $omitImages = false
    ): string {
        return implode('', [
            $withStock ? 'V' : '',
            $omitPurchasePrice ? 'I' : '',
            $ignoreWebShopLink ? 'A' : '',
            $omitImages ? 'Z' : '',
        ]);
    }
}
