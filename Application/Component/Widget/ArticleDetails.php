<?php

namespace rs\reviews\Application\Component\Widget;

class ArticleDetails extends ArticleDetails_parent
{
    protected $_aReviewsAll = null;

    public function getReviewsAll()
    {

        if ($this->_aReviewsAll === null) {
            $this->_aReviewsAll = false;
            if ($this->getConfig()->getConfigParam('bl_perfLoadReviews')) {
                $this->_aReviewsAll = $this->getProduct()->getReviewsAll();
            }
        }

        return $this->_aReviewsAll;
    }
}