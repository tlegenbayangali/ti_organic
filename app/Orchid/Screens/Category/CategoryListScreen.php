<?php

namespace App\Orchid\Screens\Category;

use App\Models\Category;
use App\Orchid\Layouts\Category\CategoryListTable;
use Orchid\Screen\Screen;

class CategoryListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query (): iterable
    {
        $categories = Category::filters()->defaultSort('created_at', 'desc')->paginate(15);

        return [
            'categories' => $categories
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name (): ?string
    {
        return 'Категории товаров';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar (): iterable
    {
        return [];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout (): iterable
    {
        return [
            CategoryListTable::class
        ];
    }
}