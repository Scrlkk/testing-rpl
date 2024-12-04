<?php declare(strict_types=1);

namespace Tests\Unit;

use Answer;
use PHPUnit\Framework\TestCase;

class AnswerTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_yes_no_answer(): void
    {
        $stub = $this->getMockBuilder(Answer::class)
            ->onlyMethods(["readUserInput"])
            ->getMock();

        $stub->method("readUserInput")
            ->willReturnOnConsecutiveCalls("yes", "junk");

        $answer = $stub->getYesNoAnswer("Student? (yes/no)");
        $this->assertSame("yes", $answer);

        $answer = $stub->getYesNoAnswer("Student? (yes/no)");
        $this->assertNull($answer);

    }
}
