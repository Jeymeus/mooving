<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240702185132 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user CHANGE username username VARCHAR(50) NOT NULL, CHANGE email email VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE vehicle CHANGE brand brand VARCHAR(50) NOT NULL, CHANGE model model VARCHAR(50) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user CHANGE username username VARCHAR(180) NOT NULL, CHANGE email email VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE vehicle CHANGE brand brand VARCHAR(255) NOT NULL, CHANGE model model VARCHAR(255) NOT NULL');
    }
}
