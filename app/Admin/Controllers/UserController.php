<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('id', __('Id'));
        $grid->column('student_name', __('Student name'));
        $grid->column('email', __('Email'));
        $grid->column('phone', __('Phone'));
        $grid->column('student_address', __('Student address'));
        $grid->column('collage', __('Collage'));
        $grid->column('password', __('Password'));
        $grid->column('password_confirmation', __('Password confirmation'));
        $grid->column('remember_token', __('Remember token'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('student_name', __('Student name'));
        $show->field('email', __('Email'));
        $show->field('phone', __('Phone'));
        $show->field('student_address', __('Student address'));
        $show->field('collage', __('Collage'));
        $show->field('password', __('Password'));
        $show->field('password_confirmation', __('Password confirmation'));
        $show->field('remember_token', __('Remember token'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User());

        $form->text('student_name', __('Student name'));
        $form->email('email', __('Email'));
        $form->mobile('phone', __('Phone'));
        $form->text('student_address', __('Student address'));
        $form->text('collage', __('Collage'));
        $form->password('password', __('Password'));
        $form->text('password_confirmation', __('Password confirmation'));
        $form->text('remember_token', __('Remember token'));

        return $form;
    }
}
