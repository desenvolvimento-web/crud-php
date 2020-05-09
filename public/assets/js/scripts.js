async  function destroy(id) {
  const result = await fetch(`/todos/${id}`, {method: 'delete'});

}
