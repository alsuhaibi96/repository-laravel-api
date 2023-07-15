<?php

namespace App\Presenters\Articles;

use App\Transformers\Articles\ArticleTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ArticlePresenter.
 *
 * @package namespace App\Presenters\Articles;
 */
class ArticlePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ArticleTransformer();
    }
}
