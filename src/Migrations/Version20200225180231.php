<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200225180231 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE mdfe_ide_veic_tracao (id INT AUTO_INCREMENT NOT NULL, c_int VARCHAR(10) DEFAULT NULL, placa VARCHAR(255) DEFAULT NULL, tara VARCHAR(255) DEFAULT NULL, cap_kg VARCHAR(255) DEFAULT NULL, tp_car VARCHAR(255) DEFAULT NULL, uf VARCHAR(255) DEFAULT NULL, prop_cpf VARCHAR(255) DEFAULT NULL, prop_cnpj VARCHAR(255) DEFAULT NULL, prop_rntrc VARCHAR(255) DEFAULT NULL, prop_xnome VARCHAR(255) DEFAULT NULL, prop_ie VARCHAR(255) DEFAULT NULL, prop_uf VARCHAR(255) DEFAULT NULL, tp_prop INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE mdfe_ide_veic_tracao');
    }
}
