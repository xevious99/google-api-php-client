<?php
namespace Google\Service\Datastore;

/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */


class LookupRequest extends \Google\Collection
{
  protected $keysType = '\Google\Service\Datastore\Key';
  protected $keysDataType = 'array';
  protected $readOptionsType = '\Google\Service\Datastore\ReadOptions';
  protected $readOptionsDataType = '';

  public function setKeys($keys)
  {
    $this->keys = $keys;
  }

  public function getKeys()
  {
    return $this->keys;
  }
  
  public function setReadOptions(\Google\Service\Datastore\ReadOptions $readOptions)
  {
    $this->readOptions = $readOptions;
  }

  public function getReadOptions()
  {
    return $this->readOptions;
  }
  
}
