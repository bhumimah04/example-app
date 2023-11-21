<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Practicals\Song;

class SongTest extends TestCase {
    public function testSetAndGetTempo() {
        // Arrange
        $song = new Song();

        // Act
        $song->setTempo(60);
        $result = $song->getTempo();

        // Assert
        $this->assertEquals(60, $result);
    }
    public function testSetTempoWithString() {
        // Arrange
        $song = new Song();

        // Act
        $song->setTempo("60");
        $result = $song->getTempo();

        // Assert
        $this->assertEquals(60, $result);
    }
    public function testSetTempoRejectsAlphabetString() {
        // Arrange
        $this->expectException(\InvalidArgumentException::class);

        // Act
        $song = new Song();
        $song->setTempo("60 BPM");

        
    }
    public function testSetTempoRejectsFloat() {
        // Arrange
        $this->expectException(\InvalidArgumentException::class);

        // Act
        $song = new Song();
        $song->setTempo(60.5);
    }
}
?>