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
use LaravelJsonApi\Schema\SchemaBuilder;

class CommentSchema extends SchemaBuilder
{

    /**
     * @return Attribute
     */
    public function content(): Attribute
    {
        return $this->attribute();
    }

    /**
     * @return Attribute
     */
    public function createdAt(): Attribute
    {
        return $this->attribute()->readOnly();
    }

    /**
     * @return Attribute
     */
    public function updatedAt(): Attribute
    {
        return $this->attribute()->readOnly();
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo();
    }
}
