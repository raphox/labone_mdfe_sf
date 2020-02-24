<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200224195455 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE mdfe_ide_routing_city (mdfe_ide_id INT NOT NULL, state_id INT NOT NULL, INDEX IDX_99EFF8C09C95957A (mdfe_ide_id), INDEX IDX_99EFF8C05D83CC1 (state_id), PRIMARY KEY(mdfe_ide_id, state_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mdfe_ide_routing_city ADD CONSTRAINT FK_99EFF8C09C95957A FOREIGN KEY (mdfe_ide_id) REFERENCES mdfe_ide (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mdfe_ide_routing_city ADD CONSTRAINT FK_99EFF8C05D83CC1 FOREIGN KEY (state_id) REFERENCES state (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE state ADD CONSTRAINT FK_A393D2FBF92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
        $this->addSql('CREATE INDEX IDX_A393D2FBF92F3E70 ON state (country_id)');
        $this->addSql('CREATE INDEX IDX_A393D2FBB7405B21 ON state (uf)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE mdfe_ide_routing_city');
        $this->addSql('ALTER TABLE state DROP FOREIGN KEY FK_A393D2FBF92F3E70');
        $this->addSql('DROP INDEX IDX_A393D2FBF92F3E70 ON state');
        $this->addSql('DROP INDEX IDX_A393D2FBB7405B21 ON state');
    }
}
