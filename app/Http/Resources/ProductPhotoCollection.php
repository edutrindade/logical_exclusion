<?php

namespace CodeShopping\Http\Resources;

use CodeShopping\Models\Product;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductPhotoCollection extends ResourceCollection
{
    private $product;

    public function _construct($construct, Product $product)
    {
        $this->product = $product;
        parent::_construct($resource);
    }

    public function toArray($request)
    {
        return [
            'product' => new ProductResource($this->product),
            'photos' => $this->collection->map(function($photo) {
                return new ProductPhotoResource($photo, true); 
            })
        ];
    }
}
