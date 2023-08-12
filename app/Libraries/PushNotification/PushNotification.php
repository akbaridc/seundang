<?php

namespace App\Libraries\PushNotification;

use Berkayk\OneSignal\OneSignalFacade as OneSignal;

class PushNotification
{
    protected $playerIds;

    /**
     * @var string $title
     */
    protected $title;

    /**
     * @var string $content
     */
    protected $content;

    /**
     * @var string $pageType
     */
    protected $pageType;

    /**
     * @var string $url
     */
    protected $url;

    /**
     * @var bool
     */
    protected $isForAll = false;

    /**
     * @var bool
     */
    protected $isPlayerIds = false;

    /**
     * @var mixed $dataResource
     */
    protected $dataResource;

    /**
     * @return $this
     */
    public function forPlayerIds($playerIds): self
    {
        $this->isPlayerIds = true;
        $this->playerIds = $playerIds;
        return $this;
    }


    /**
     * @return $this
     */
    public function forAllUser(): self
    {
        $this->isForAll = true;
        return $this;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function title(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $content
     * @return $this
     */
    public function content(string $content): self
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @param string $url
     * @return $this
     */
    public function url(string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @param string $pageType
     * @return $this
     */
    public function pageType(string $pageType): self
    {
        $this->pageType = $pageType;
        return $this;
    }

    /**
     * @param mixed $dataResource
     * @return $this
     */
    public function dataResource($dataResource): self
    {
        $this->dataResource = $dataResource;
        return $this;
    }

    /**
     * @return void
     */
    public function send(): void
    {
        $params = [
            'headings' => [
                'en' => $this->title
            ],
            'contents' => [
                'en' => $this->content
            ],
            'url' => $this->url,
            'data' => [
                'type' => $this->pageType,
                'resource' => $this->dataResource
            ]
        ];

        if ($this->isForAll) {
            $params['included_segments'] = ['All'];
        } else {
            $params['include_player_ids'] = $this->playerIds;
        }

        try {
            OneSignal::sendNotificationCustom($params);
        } catch (\Exception $exception) {
            return;
        }
    }
}
