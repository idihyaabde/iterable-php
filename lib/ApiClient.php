<?php

namespace IterableIA;

use Api\CampaignsApi;
use Api\ChannelsApi;
use Api\CommerceApi;
use Api\EmailApi;
use Api\EventsApi;
use Api\ExperimentsApi;
use Api\ExportApi;
use Api\InAppApi;
use Api\ListsApi;
use Api\MessageTypesApi;
use Api\MetadataApi;
use Api\PushApi;
use Api\SMSApi;
use Api\TemplatesApi;
use Api\UsersApi;
use Api\WebhooksApi;
use Api\WebPushApi;
use Api\WorkflowsApi;
use Configuration;

class ApiClient extends Configuration
{
    public $campaignsApi;
    public $channelsApi;
    public $commerceApi;
    public $emailApi;
    public $eventsApi;
    public $experimentsApi;
    public $exportApi;
    public $inAppApi;
    public $listsApi;
    public $messageTypesApi;
    public $metadataApi;
    public $pushApi;
    public $smsApi;
    public $templatesApi;
    public $usersApi;
    public $webhooksApi;
    public $webPushApi;
    public $workflowsApi;

    /**
     * ApiClient constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->campaignsApi = new CampaignsApi();
        $this->channelsApi = new ChannelsApi();
        $this->commerceApi = new CommerceApi();
        $this->emailApi = new EmailApi();
        $this->eventsApi = new EventsApi();
        $this->experimentsApi = new ExperimentsApi();
        $this->exportApi = new ExportApi();
        $this->inAppApi = new InAppApi();
        $this->listsApi = new ListsApi();
        $this->messageTypesApi = new MessageTypesApi();
        $this->metadataApi = new MetadataApi();
        $this->pushApi = new PushApi();
        $this->smsApi = new SMSApi();
        $this->templatesApi = new TemplatesApi();
        $this->usersApi = new UsersApi();
        $this->webhooksApi = new WebhooksApi();
        $this->webPushApi = new WebPushApi();
        $this->workflowsApi = new WorkflowsApi();
    }
}
