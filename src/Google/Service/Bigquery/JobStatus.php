<?php
namespace Google\Service\Bigquery;

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


class JobStatus extends \Google\Collection
{
  protected $errorResultType = '\Google\Service\Bigquery\ErrorProto';
  protected $errorResultDataType = '';
  protected $errorsType = '\Google\Service\Bigquery\ErrorProto';
  protected $errorsDataType = 'array';
  public $state;

  public function setErrorResult(\Google\Service\Bigquery\ErrorProto $errorResult)
  {
    $this->errorResult = $errorResult;
  }

  public function getErrorResult()
  {
    return $this->errorResult;
  }

  public function setErrors($errors)
  {
    $this->errors = $errors;
  }

  public function getErrors()
  {
    return $this->errors;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
  }
}
