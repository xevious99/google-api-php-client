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


class GetQueryResultsResponse extends \Google\Collection
{
  public $cacheHit;
  public $etag;
  public $jobComplete;
  protected $jobReferenceType = '\Google\Service\Bigquery\JobReference';
  protected $jobReferenceDataType = '';
  public $kind;
  public $pageToken;
  protected $rowsType = '\Google\Service\Bigquery\TableRow';
  protected $rowsDataType = 'array';
  protected $schemaType = '\Google\Service\Bigquery\TableSchema';
  protected $schemaDataType = '';
  public $totalRows;

  public function setCacheHit($cacheHit)
  {
    $this->cacheHit = $cacheHit;
  }

  public function getCacheHit()
  {
    return $this->cacheHit;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setJobComplete($jobComplete)
  {
    $this->jobComplete = $jobComplete;
  }

  public function getJobComplete()
  {
    return $this->jobComplete;
  }

  public function setJobReference(\Google\Service\Bigquery\JobReference $jobReference)
  {
    $this->jobReference = $jobReference;
  }

  public function getJobReference()
  {
    return $this->jobReference;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }

  public function getPageToken()
  {
    return $this->pageToken;
  }

  public function setRows($rows)
  {
    $this->rows = $rows;
  }

  public function getRows()
  {
    return $this->rows;
  }

  public function setSchema(\Google\Service\Bigquery\TableSchema $schema)
  {
    $this->schema = $schema;
  }

  public function getSchema()
  {
    return $this->schema;
  }

  public function setTotalRows($totalRows)
  {
    $this->totalRows = $totalRows;
  }

  public function getTotalRows()
  {
    return $this->totalRows;
  }
}
