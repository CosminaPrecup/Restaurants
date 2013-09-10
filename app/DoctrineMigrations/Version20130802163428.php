<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20130802163428 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE places DROP FOREIGN KEY FK_FEAF6C556000DC1D");
        $this->addSql("DROP INDEX IDX_FEAF6C556000DC1D ON places");
        $this->addSql("ALTER TABLE places CHANGE imagesid PlacesId INT DEFAULT NULL");
        $this->addSql("ALTER TABLE places ADD CONSTRAINT FK_FEAF6C5550035B69 FOREIGN KEY (PlacesId) REFERENCES images (id)");
        $this->addSql("CREATE INDEX IDX_FEAF6C5550035B69 ON places (PlacesId)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE places DROP FOREIGN KEY FK_FEAF6C5550035B69");
        $this->addSql("DROP INDEX IDX_FEAF6C5550035B69 ON places");
        $this->addSql("ALTER TABLE places CHANGE placesid ImagesId INT DEFAULT NULL");
        $this->addSql("ALTER TABLE places ADD CONSTRAINT FK_FEAF6C556000DC1D FOREIGN KEY (ImagesId) REFERENCES images (id)");
        $this->addSql("CREATE INDEX IDX_FEAF6C556000DC1D ON places (ImagesId)");
    }
}
