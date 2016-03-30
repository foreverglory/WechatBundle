<?php

namespace Glory\Bundle\WechatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="wechat_message")
 * @ORM\Entity(repositoryClass="Glory\Bundle\WechatBundle\Repository\MessageRepository")
 */
class Message
{
    /**
     * @var string
     *
     * @ORM\Column(name="MsgId", type="string", length=255, unique=true)
     * @ORM\Id
     */
    private $msgId;

    /**
     * @var string
     *
     * @ORM\Column(name="MsgType", type="string", length=32)
     */
    private $msgType;

    /**
     * @var string
     *
     * @ORM\Column(name="MsgContext", type="string", length=255, nullable=true)
     */
    private $msgContext;

    /**
     * @var string
     *
     * @ORM\Column(name="ToUserName", type="string", length=32)
     */
    private $toUserName;

    /**
     * @var string
     *
     * @ORM\Column(name="FromUserName", type="string", length=32)
     */
    private $fromUserName;

    /**
     * @var string
     *
     * @ORM\Column(name="App", type="string", length=32)
     */
    private $app;

    /**
     * @var integer
     *
     * @ORM\Column(name="CreateTime", type="integer")
     */
    private $createTime;



    /**
     * Set msgId
     *
     * @param string $msgId
     *
     * @return Message
     */
    public function setMsgId($msgId)
    {
        $this->msgId = $msgId;

        return $this;
    }

    /**
     * Get msgId
     *
     * @return string
     */
    public function getMsgId()
    {
        return $this->msgId;
    }

    /**
     * Set msgType
     *
     * @param string $msgType
     *
     * @return Message
     */
    public function setMsgType($msgType)
    {
        $this->msgType = $msgType;

        return $this;
    }

    /**
     * Get msgType
     *
     * @return string
     */
    public function getMsgType()
    {
        return $this->msgType;
    }

    /**
     * Set msgContext
     *
     * @param string $msgContext
     *
     * @return Message
     */
    public function setMsgContext($msgContext)
    {
        $this->msgContext = $msgContext;

        return $this;
    }

    /**
     * Get msgContext
     *
     * @return string
     */
    public function getMsgContext()
    {
        return $this->msgContext;
    }

    /**
     * Set toUserName
     *
     * @param string $toUserName
     *
     * @return Message
     */
    public function setToUserName($toUserName)
    {
        $this->toUserName = $toUserName;

        return $this;
    }

    /**
     * Get toUserName
     *
     * @return string
     */
    public function getToUserName()
    {
        return $this->toUserName;
    }

    /**
     * Set fromUserName
     *
     * @param string $fromUserName
     *
     * @return Message
     */
    public function setFromUserName($fromUserName)
    {
        $this->fromUserName = $fromUserName;

        return $this;
    }

    /**
     * Get fromUserName
     *
     * @return string
     */
    public function getFromUserName()
    {
        return $this->fromUserName;
    }

    /**
     * Set app
     *
     * @param string $app
     *
     * @return Message
     */
    public function setApp($app)
    {
        $this->app = $app;

        return $this;
    }

    /**
     * Get app
     *
     * @return string
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * Set createTime
     *
     * @param integer $createTime
     *
     * @return Message
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * Get createTime
     *
     * @return integer
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }
}
