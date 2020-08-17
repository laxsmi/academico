<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ReportController
 */
class ReportControllerTest extends TestCase
{
    /**
     * @test
     */
    public function courses_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('courseReport'));

        $response->assertOk();
        $response->assertViewIs('reports.courses');
        $response->assertViewHas('selected_period');
        $response->assertViewHas('courses');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function index_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('allReports'));

        $response->assertOk();
        $response->assertViewIs('reports.index');
        $response->assertViewHas('currentPeriod');
        $response->assertViewHas('enrollmentsPeriod');
        $response->assertViewHas('pending_enrollment_count');
        $response->assertViewHas('paid_enrollment_count');
        $response->assertViewHas('total_enrollment_count');
        $response->assertViewHas('students_count');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function internal_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('homeReport'));

        $response->assertOk();
        $response->assertViewIs('reports.internal');
        $response->assertViewHas('selected_period');
        $response->assertViewHas('pending_enrollment_count');
        $response->assertViewHas('paid_enrollment_count');
        $response->assertViewHas('total_enrollment_count');
        $response->assertViewHas('students_count');
        $response->assertViewHas('data');
        $response->assertViewHas('selected_period');
        $response->assertViewHas('years');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function rhythms_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('rhythmReport'));

        $response->assertOk();
        $response->assertViewIs('reports.rhythms');
        $response->assertViewHas('selected_period');
        $response->assertViewHas('data');

        // TODO: perform additional assertions
    }

    // test cases...
}
