<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230117132141 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE burger DROP prix');
        $this->addSql('ALTER TABLE complement DROP prix');
        $this->addSql('ALTER TABLE menu ADD prix DOUBLE PRECISION NOT NULL, DROP image');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE burger ADD prix INT NOT NULL');
        $this->addSql('ALTER TABLE complement ADD prix INT NOT NULL');
        $this->addSql('ALTER TABLE menu ADD image LONGTEXT NOT NULL COMMENT \'(DC2Type:object)\', DROP prix');
    }
}
