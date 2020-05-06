<?php

namespace rs\reviews\Application\Model;

class Article extends Article_parent
{

    public function getReviewsAll()
    {

        $aIds = [$this->getId()];

        if ($this->oxarticles__oxparentid->value) {
            $aIds[] = $this->oxarticles__oxparentid->value;
        }

        // showing variant reviews ..
        if ($this->getConfig()->getConfigParam('blShowVariantReviews')) {
            $aAdd = $this->getVariantIds();
            if (is_array($aAdd)) {
                $aIds = array_merge($aIds, $aAdd);
            }
        }

        $aRevs = [];
        $oReview = oxNew(\OxidEsales\Eshop\Application\Model\Review::class);
        $aLangIds = \OxidEsales\Eshop\Core\Registry::getLang()->getLanguageArray();
        foreach($aLangIds as $aLang)
        {
            if((bool) $aLang->active)
            {
                $aItem=[];
                $aItem['langid']=$aLang->id;
                $aItem['selected']=$aLang->selected;
                $aItem['reviews']= $oReview->loadList('oxarticle', $aIds, false, $aItem['langid']);
                if($aItem['reviews']->count() > 0)
                    $aRevs[$aItem['langid']]=$aItem;
            }
        }

        //if no review found, return null
        if (count($aRevs)===0) {
            return null;
        }

        return $aRevs;
    }
}