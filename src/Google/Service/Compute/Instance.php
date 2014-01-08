<?php
namespace Google\Service\Compute;

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


class Instance extends \Google\Collection
{
  public $canIpForward;
  public $creationTimestamp;
  public $description;
  protected $disksType = '\Google\Service\Compute\AttachedDisk';
  protected $disksDataType = 'array';
  public $id;
  public $kind;
  public $machineType;
  protected $metadataType = '\Google\Service\Compute\Metadata';
  protected $metadataDataType = '';
  public $name;
  protected $networkInterfacesType = '\Google\Service\Compute\NetworkInterface';
  protected $networkInterfacesDataType = 'array';
  protected $schedulingType = '\Google\Service\Compute\Scheduling';
  protected $schedulingDataType = '';
  public $selfLink;
  protected $serviceAccountsType = '\Google\Service\Compute\ServiceAccount';
  protected $serviceAccountsDataType = 'array';
  public $status;
  public $statusMessage;
  protected $tagsType = '\Google\Service\Compute\Tags';
  protected $tagsDataType = '';
  public $zone;

  public function setCanIpForward($canIpForward)
  {
    $this->canIpForward = $canIpForward;
  }

  public function getCanIpForward()
  {
    return $this->canIpForward;
  }

  public function setCreationTimestamp($creationTimestamp)
  {
    $this->creationTimestamp = $creationTimestamp;
  }

  public function getCreationTimestamp()
  {
    return $this->creationTimestamp;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDisks($disks)
  {
    $this->disks = $disks;
  }

  public function getDisks()
  {
    return $this->disks;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }

  public function getMachineType()
  {
    return $this->machineType;
  }

  public function setMetadata(\Google\Service\Compute\Metadata $metadata)
  {
    $this->metadata = $metadata;
  }

  public function getMetadata()
  {
    return $this->metadata;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setNetworkInterfaces($networkInterfaces)
  {
    $this->networkInterfaces = $networkInterfaces;
  }

  public function getNetworkInterfaces()
  {
    return $this->networkInterfaces;
  }

  public function setScheduling(\Google\Service\Compute\Scheduling $scheduling)
  {
    $this->scheduling = $scheduling;
  }

  public function getScheduling()
  {
    return $this->scheduling;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setServiceAccounts($serviceAccounts)
  {
    $this->serviceAccounts = $serviceAccounts;
  }

  public function getServiceAccounts()
  {
    return $this->serviceAccounts;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }

  public function getStatusMessage()
  {
    return $this->statusMessage;
  }

  public function setTags(\Google\Service\Compute\Tags $tags)
  {
    $this->tags = $tags;
  }

  public function getTags()
  {
    return $this->tags;
  }

  public function setZone($zone)
  {
    $this->zone = $zone;
  }

  public function getZone()
  {
    return $this->zone;
  }
}