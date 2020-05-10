async function destroy(id) {
  const response = await fetch(`/todos/${id}`, {method: 'delete'});
  const result = await response.json();

  if (result.ok) {
    window.location.reload();
  } else {
    console.error('Ops!');
  }
}

async function onCheck(event, id) {
  const body = new URLSearchParams();
  body.set('done', event.target.checked);

  const response = await fetch(`/todos/${id}`, {method: 'put', body});
  const result = await response.json();

  if (result.ok) {
    window.location.reload();
  } else {
    console.error('Ops!');
  }
}

async function onSubmit(event) {
  event.preventDefault();

  const {action, method} = event.target;
  const body = new FormData(event.target);
  const response = await fetch(action, {method, body});
  const result = await response.json();

  if (result.ok) {
    window.location.reload();
  } else {
    console.error('Ops!');
  }
}
