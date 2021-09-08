Feature:
  In order to manage user
  As a admin
  I should able to add user

  Background:
    Given I add "Content-Type" header equal to "application/json"
    And I add "Accept" header equal to "application/json"

  Scenario: Add new user
    Given I don't have user with username "test"
    When I send a POST request to "/users" with body:
    """
    {
      "username": "test",
      "email": "test@example.org",
      "plainPassword": "test"
    }
    """
    Then the response status code should be 201
    And the JSON node "username" should be equal to "test"
    And the JSON node "email" should be equal to "test@example.org"

