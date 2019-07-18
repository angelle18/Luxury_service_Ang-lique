<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190710123455 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE candidate CHANGE user_id user_id INT DEFAULT NULL, CHANGE category_id category_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE job_application RENAME INDEX offer_id TO IDX_C737C68853C674EE');
        $this->addSql('ALTER TABLE contact CHANGE client_id client_id INT DEFAULT NULL, CHANGE main main TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE admin admin TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE offer CHANGE contact_id contact_id INT DEFAULT NULL, CHANGE category_id category_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE candidate CHANGE user_id user_id INT NOT NULL, CHANGE category_id category_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contact CHANGE client_id client_id INT NOT NULL, CHANGE main main TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE job_application RENAME INDEX idx_c737c68853c674ee TO offer_id');
        $this->addSql('ALTER TABLE offer CHANGE contact_id contact_id INT NOT NULL, CHANGE category_id category_id INT NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE admin admin TINYINT(1) DEFAULT \'0\' NOT NULL');
    }
}
