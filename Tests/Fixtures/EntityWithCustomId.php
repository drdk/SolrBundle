<?php

namespace FS\SolrBundle\Tests\Fixtures;

use FS\SolrBundle\Doctrine\Annotation as Solr;

/**
 * @Solr\Document()
 */
class EntityWithCustomId
{
    /**
     * @Solr\Id(generateId = true)
     */
    private $id;

    /**
     * @Solr\Field
     *
     * @var string
     */
    private $title;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}