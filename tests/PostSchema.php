<?php
/**
 * Copyright 2020 Cloud Creativity Limited
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace LaravelJsonApi\Schema\Tests;

use LaravelJsonApi\Schema\Fields\Attribute;
use LaravelJsonApi\Schema\Fields\BelongsTo;
use LaravelJsonApi\Schema\Fields\HasMany;
use LaravelJsonApi\Schema\SchemaBuilder;

class PostSchema extends SchemaBuilder
{

    /**
     * @return BelongsTo
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(null, 'users');
    }

    /**
     * @return HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany();
    }

    /**
     * @return Attribute
     */
    public function content(): Attribute
    {
        return $this->attribute('description');
    }

    /**
     * @return Attribute
     */
    public function slug(): Attribute
    {
        return $this->attribute();
    }

    /**
     * @return Attribute
     */
    public function title(): Attribute
    {
        return $this->attribute();
    }
}
