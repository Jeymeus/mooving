<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240618140435 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation_user DROP FOREIGN KEY FK_9BAA1B21A76ED395');
        $this->addSql('ALTER TABLE reservation_user DROP FOREIGN KEY FK_9BAA1B21B83297E7');
        $this->addSql('ALTER TABLE reservation_vehicle DROP FOREIGN KEY FK_7C155F03545317D1');
        $this->addSql('ALTER TABLE reservation_vehicle DROP FOREIGN KEY FK_7C155F03B83297E7');
        $this->addSql('DROP TABLE reservation_user');
        $this->addSql('DROP TABLE reservation_vehicle');
        $this->addSql('ALTER TABLE reservation ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_42C84955A76ED395 ON reservation (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reservation_user (reservation_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_9BAA1B21B83297E7 (reservation_id), INDEX IDX_9BAA1B21A76ED395 (user_id), PRIMARY KEY(reservation_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reservation_vehicle (reservation_id INT NOT NULL, vehicle_id INT NOT NULL, INDEX IDX_7C155F03B83297E7 (reservation_id), INDEX IDX_7C155F03545317D1 (vehicle_id), PRIMARY KEY(reservation_id, vehicle_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE reservation_user ADD CONSTRAINT FK_9BAA1B21A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation_user ADD CONSTRAINT FK_9BAA1B21B83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation_vehicle ADD CONSTRAINT FK_7C155F03545317D1 FOREIGN KEY (vehicle_id) REFERENCES vehicle (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation_vehicle ADD CONSTRAINT FK_7C155F03B83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955A76ED395');
        $this->addSql('DROP INDEX IDX_42C84955A76ED395 ON reservation');
        $this->addSql('ALTER TABLE reservation DROP user_id');
    }
}
