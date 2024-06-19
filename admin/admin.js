function validateForm() {
  const username = document.forms[0].username.value;
  const password = document.forms[0].password.value;

  if (username.trim() === '' || password.trim() === '') {
    alert('Please enter both username and password');
    return false;
  }

  // Regular expression to validate username (disallowing numbers)
  const usernameRegex = /^[A-Za-z]+$/;

  if (!usernameRegex.test(username)) {
    alert('Username should only contain letters');
    return false;
  }

  return true;
}