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

declare(strict_types=1);

namespace LaravelJsonApi\Schema;

use LaravelJsonApi\Core\Contracts\Schema\FieldList;
use LaravelJsonApi\Core\Contracts\Schema\Schema as SchemaContract;
use function rtrim;

class Schema implements SchemaContract
{

    /**
     * @var string
     */
    private $resourceType;

    /**
     * @var string
     */
    private $baseUri;

    /**
     * @var FieldList
     */
    private $fields;

    /**
     * Schema constructor.
     *
     * @param string $resourceType
     * @param string $baseUri
     * @param FieldList $fields
     */
    public function __construct(string $resourceType, string $baseUri, FieldList $fields)
    {
        $this->resourceType = $resourceType;
        $this->baseUri = rtrim($baseUri, '/');
        $this->fields = $fields;
    }

    /**
     * @inheritDoc
     */
    public function type(): string
    {
        return $this->resourceType;
    }

    /**
     * @inheritDoc
     */
    public function fields(): FieldList
    {
        return $this->fields;
    }

    /**
     * @inheritDoc
     */
    public function baseUri(): string
    {
        return "{$this->baseUri}/{$this->resourceType}";
    }
}
