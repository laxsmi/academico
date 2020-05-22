<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\StudentPhoneNumberController
 */
class StudentPhoneNumberControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function destroy_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $phone_number = factory(\App\Models\PhoneNumber::class)->create();

        $response = $this->delete('phonenumber/{phoneNumber}');

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function get_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $student = factory(\App\Models\Student::class)->create();

        $response = $this->get('phonenumber/student/{student}');

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function store_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $student = factory(\App\Models\Student::class)->create();

        $response = $this->post('phonenumber/student/{student}', [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    // test cases...
}
