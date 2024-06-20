<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240620071832 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Change column names start_date and end_date to startDate and endDate in reservation table';
    }

    public function up(Schema $schema): void
    {
        // Change column names from snake_case to camelCase
        $this->addSql('ALTER TABLE reservation CHANGE start_date startDate DATE NOT NULL, CHANGE end_date endDate DATE NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // Revert column names from camelCase to snake_case
        $this->addSql('ALTER TABLE reservation CHANGE startDate start_date DATE NOT NULL, CHANGE endDate end_date DATE NOT NULL');
    }
}

