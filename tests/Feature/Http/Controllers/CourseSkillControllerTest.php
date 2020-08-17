<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CourseSkillController
 */
class CourseSkillControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function export_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $course = factory(\App\Models\Course::class)->create();

        $response = $this->get(route('course-skills-export', [$course]));

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function export_course_syllabus_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $course = factory(\App\Models\Course::class)->create();

        $response = $this->get(route('exportCourseSyllabus', [$course]));

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function get_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $course = factory(\App\Models\Course::class)->create();

        $response = $this->get('course/{course}/getcourseskills');

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function import_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $course = factory(\App\Models\Course::class)->create();

        $response = $this->post(route('course-skills-import', [$course]), [
            // TODO: send request data
        ]);

        $response->assertRedirect(back());

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function index_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $course = factory(\App\Models\Course::class)->create();

        $response = $this->get(route('course-skills', [$course]));

        $response->assertOk();
        $response->assertViewIs('skills.course');
        $response->assertViewHas('course');
        $response->assertViewHas('skills');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function set_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $course = factory(\App\Models\Course::class)->create();

        $response = $this->patch('course/{course}/setskills', [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    // test cases...
}
