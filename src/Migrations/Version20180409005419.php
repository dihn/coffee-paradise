<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180409005419 extends AbstractMigration
{
    /**
     * UP
     * @param Schema $schema
     * @throws \Doctrine\DBAL\Migrations\AbortMigrationException
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C67597D3FE');
        $this->addSql('DROP INDEX IDX_794381C67597D3FE ON review');
        $this->addSql('ALTER TABLE review CHANGE member_id coffee_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C678CD6D6E FOREIGN KEY (coffee_id) REFERENCES coffee (id)');
        $this->addSql('CREATE INDEX IDX_794381C678CD6D6E ON review (coffee_id)');
    }

    /**
     * DOWN
     * @param Schema $schema
     * @throws \Doctrine\DBAL\Migrations\AbortMigrationException
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C678CD6D6E');
        $this->addSql('DROP INDEX IDX_794381C678CD6D6E ON review');
        $this->addSql('ALTER TABLE review CHANGE coffee_id member_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C67597D3FE FOREIGN KEY (member_id) REFERENCES member (id)');
        $this->addSql('CREATE INDEX IDX_794381C67597D3FE ON review (member_id)');
    }
}
