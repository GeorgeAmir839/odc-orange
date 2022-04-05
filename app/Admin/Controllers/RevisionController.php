<?php

namespace App\Admin\Controllers;

use App\Models\Revision;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class RevisionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Revision';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Revision());

        $grid->column('id', __('Id'));
        $grid->column('student_degree', __('Student degree'));
        $grid->column('total_right_degree', __('Total right degree'));
        $grid->column('total_wrong_degree', __('Total wrong degree'));
        $grid->column('exam_id', __('Exam id'));
        $grid->column('student_id', __('Student id'));
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
        $show = new Show(Revision::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('student_degree', __('Student degree'));
        $show->field('total_right_degree', __('Total right degree'));
        $show->field('total_wrong_degree', __('Total wrong degree'));
        $show->field('exam_id', __('Exam id'));
        $show->field('student_id', __('Student id'));
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
        $form = new Form(new Revision());

        $form->decimal('student_degree', __('Student degree'));
        $form->decimal('total_right_degree', __('Total right degree'));
        $form->decimal('total_wrong_degree', __('Total wrong degree'));
        $form->number('exam_id', __('Exam id'));
        $form->number('student_id', __('Student id'));

        return $form;
    }
}
