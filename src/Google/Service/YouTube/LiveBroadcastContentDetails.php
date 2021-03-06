<?php
namespace Google\Service\YouTube;

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


class LiveBroadcastContentDetails extends \Google\Model
{
  public $boundStreamId;
  public $enableClosedCaptions;
  public $enableContentEncryption;
  public $enableDvr;
  public $enableEmbed;
  protected $monitorStreamType = '\Google\Service\YouTube\MonitorStreamInfo';
  protected $monitorStreamDataType = '';
  public $recordFromStart;
  public $startWithSlate;

  public function setBoundStreamId($boundStreamId)
  {
    $this->boundStreamId = $boundStreamId;
  }

  public function getBoundStreamId()
  {
    return $this->boundStreamId;
  }

  public function setEnableClosedCaptions($enableClosedCaptions)
  {
    $this->enableClosedCaptions = $enableClosedCaptions;
  }

  public function getEnableClosedCaptions()
  {
    return $this->enableClosedCaptions;
  }

  public function setEnableContentEncryption($enableContentEncryption)
  {
    $this->enableContentEncryption = $enableContentEncryption;
  }

  public function getEnableContentEncryption()
  {
    return $this->enableContentEncryption;
  }

  public function setEnableDvr($enableDvr)
  {
    $this->enableDvr = $enableDvr;
  }

  public function getEnableDvr()
  {
    return $this->enableDvr;
  }

  public function setEnableEmbed($enableEmbed)
  {
    $this->enableEmbed = $enableEmbed;
  }

  public function getEnableEmbed()
  {
    return $this->enableEmbed;
  }

  public function setMonitorStream(\Google\Service\YouTube\MonitorStreamInfo $monitorStream)
  {
    $this->monitorStream = $monitorStream;
  }

  public function getMonitorStream()
  {
    return $this->monitorStream;
  }

  public function setRecordFromStart($recordFromStart)
  {
    $this->recordFromStart = $recordFromStart;
  }

  public function getRecordFromStart()
  {
    return $this->recordFromStart;
  }

  public function setStartWithSlate($startWithSlate)
  {
    $this->startWithSlate = $startWithSlate;
  }

  public function getStartWithSlate()
  {
    return $this->startWithSlate;
  }
}
