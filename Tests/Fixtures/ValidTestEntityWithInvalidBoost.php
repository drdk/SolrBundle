<?php

namespace FS\SolrBundle\Tests\Fixtures;

use FS\SolrBundle\Doctrine\Annotation as Solr;

/**
 * @Solr\Document(boost="aaaa")
 */
class ValidTestEntityWithInvalidBoost
{

    /**
     * @Solr\Id
     */
    private $id;
}

