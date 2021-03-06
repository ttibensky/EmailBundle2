<?php

namespace Everlution\EmailBundle\Inbound\Message;

use Everlution\EmailBundle\Attachment\Attachment;
use Everlution\EmailBundle\Message\Header;
use Everlution\EmailBundle\Relationship\ReplyableMessage;
use Everlution\EmailBundle\Message\Recipient\Recipient;

class InboundMessage implements ReplyableMessage
{

    /** @var string */
    protected $messageId;

    /** @var string */
    protected $fromName;

    /** @var string */
    protected $fromEmail;

    /** @var string */
    protected $replyTo;

    /** @var string */
    protected $subject;

    /** @var Recipient[] */
    protected $recipients = [];

    /** @var Header[] */
    protected $headers = [];

    /** @var Attachment[] */
    protected $attachments = [];

    /** @var Attachment[] */
    protected $images = [];

    /** @var string */
    protected $text;

    /** @var string */
    protected $html;

    /** @var string */
    protected $inReplyTo;

    /** @var string */
    protected $references;

    /**
     * @return string
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * @param string $messageId
     */
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;
    }

    /**
     * @return string
     */
    public function getFromName()
    {
        return $this->fromName;
    }

    /**
     * @param string $fromName
     */
    public function setFromName($fromName)
    {
        $this->fromName = $fromName;
    }

    /**
     * @return string
     */
    public function getFromEmail()
    {
        return $this->fromEmail;
    }

    /**
     * @param string $fromEmail
     */
    public function setFromEmail($fromEmail)
    {
        $this->fromEmail = $fromEmail;
    }

    /**
     * @return string
     */
    public function getReplyTo()
    {
        return $this->replyTo;
    }

    /**
     * @param string $replyTo
     */
    public function setReplyTo($replyTo)
    {
        $this->replyTo = $replyTo;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return Recipient[]
     */
    public function getRecipients()
    {
        return $this->recipients;
    }

    /**
     * @param Recipient[] $recipients
     */
    public function setRecipients(array $recipients)
    {
        $this->recipients = $recipients;
    }

    /**
     * @return Header[]
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @param Header[] $headers
     */
    public function setHeaders(array $headers)
    {
        $this->headers = $headers;
    }

    /**
     * @return Attachment[]
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param Attachment[] $attachments
     */
    public function setAttachments(array $attachments)
    {
        $this->attachments = $attachments;
    }

    /**
     * @return Attachment[]
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param Attachment[] $images
     */
    public function setImages(array $images)
    {
        $this->images = $images;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getHtml()
    {
        return $this->html;
    }

    /**
     * @param string $html
     */
    public function setHtml($html)
    {
        $this->html = $html;
    }

    /**
     * @return string
     */
    public function getInReplyTo()
    {
        return $this->inReplyTo;
    }

    /**
     * @param string $inReplyTo
     */
    public function setInReplyTo($inReplyTo)
    {
        $this->inReplyTo = $inReplyTo;
    }

    /**
     * @return string
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * @param string $references
     */
    public function setReferences($references)
    {
        $this->references = $references;
    }

}
